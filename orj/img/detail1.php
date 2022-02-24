<a href="yazdir.php?action=detail&id=<?php echo temizle($_GET["id"]); ?>" target="_blank">
<img src="../img/yazdir.PNG" width="138" height="29" border="0" align="right"></a><br /><br /><br />
              <?php 

		
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'" ')->sor();
  if($vt->numRows() == 0) {
	  
	 
	 echo "<h3>Uyari ! Uyari Kodu D1100.<br>
	 Belirttiginiz Ilan Bulunamamistir.<br>
	 
	 Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";  
	  
	  } else {
 $veriler1 = $vt->alHepsi();


 foreach( $veriler1 as $veri1 )
{ 
$yeni_hit = $veri1->hit + 1;
$vt->sql("update ilan_ticari set hit = '".$yeni_hit ."' where id = '".$veri1->id."'")->sor();
?>    
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=1 cellPadding=1 width=100% align=center>
     
        <TBODY>
        <TR>
          <TD colspan="3" align="center">
            <h4>       
              
              <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor();
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ echo $veri12->adi; }
 ?>
              
              
              <?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>  
 <br />
        <?php 
		  if($veri1->oda_sayi == 0) { echo "Bilgi Yok"; } else { echo $veri1->oda_sayi .'&nbsp;Oda';  }
          ?>&nbsp;-
           <?php 
		  if($veri1->salon_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->salon_sayisi .'&nbsp;Salon';  }
          ?>&nbsp;-       
<font color="#FF0000">
<?php echo $veri1->metrekare; ?> m&sup2;&nbsp;-
<?php echo ondalik($veri1->fiyat); ?> 
               <?php if (!(strcmp(1, "$veri1->birim"))) {echo "TL";} ?>
              <?php if (!(strcmp(2, "$veri1->birim"))) {echo "Euro";} ?>
              <?php if (!(strcmp(3, "$veri1->birim"))) {echo "USD";} ?>
			<?php if (!(strcmp(4, "$veri1->birim"))) {echo "GBP";} ?> </font>
            </h4>
          </TD>
          <TD align="center" nowrap="nowrap"><h5>&#304;LAN NO&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $veri1->id; ?><br />
            DOSYA NO :&nbsp;<?php echo $veri1->dosya_no; ?><br />
          </h5></TD>
          </TR>
        <TR>
          <TD colSpan=4></TD></TR>
            
 
 
 
 <TR>
          <TD colspan="4"><TABLE  cellSpacing=0 cellPadding=0>
                  
                    <TR>
                      <TD align="left" valign="top" >
                        <TABLE border=0 cellSpacing=0 cellPadding=0>
                      
                        
                        
                          <TR>
                            <TD  >
   <?php 
   $vt->sql("select * from ilan_foto where ilan_id = '".$veri1->id."' limit 0,1")->sor();
   $veriler = $vt->alHepsi();
  
   foreach($veriler as $veri) {
	 echo '  
  <img src="thumb.php?p=resimler/'.$veri->foto_adi.'&w=510&h=400"  name="resim" width="510" height="400"  /> ';  
	 } 
	 ?>                          
                            
                          
                              
                              
                            </TD></TR></TABLE>
                      </TD>
                      <TD align="left" valign="top" style="TEXT-ALIGN: right;  ">
                      
 <?php 
   $vt->sql("select * from ilan_foto where ilan_id = '".$veri1->id."' ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
	$data[$i] = '  <DIV style="PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 5px">
<IMG border=0 src="thumb.php?p=resimler/'.$veri->foto_adi.'&w=85&h=64"  onmouseover="resim.src=\'thumb.php?p=resimler/'.$veri->foto_adi.'&w=510&h=400\'" >  </DIV>'; 
	$i++;
	 } 
 echo resim_listele(2,2,2,$data); 
 
 ?>
                      
                      
                      
                      
                        
                      </TD></TR></TABLE>
                        
      </TD>
          </TR>
        
       
        <TR>
          <TD colSpan=4><p>
          
            <DIV><h5>
            <STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
Bu ilan&#305; 
<font color="#00FF00"><span style="background-color: #000000">&nbsp;&nbsp;&nbsp;
<?php echo $veri1->hit; ?>&nbsp;&nbsp;&nbsp;
</span></font>
&nbsp;Kullan&#305;c&#305; ziyaret etmi&#351;tir.  </STRONG><a href="yazdir.php?action=detail&id=<?php echo temizle($_GET["id"]); ?>" target="_blank"><img src="../img/yazdir.jpg" width="108" height="26" border="0" ></a>
            </h5>
            </DIV>      

            <FONT color=#008000 size=4><STRONG>Gayrimenkul 
              Bilgi Alan&#305;</STRONG></FONT>
            <table width="100%" border="0">
              <tr>
                <td width="50%">
  <!--ilan özelliklerinin sol tarafi -->              
         <table width="100%" border="0">
     
       
        <TR>
          <TD colSpan=4 nowrap="nowrap">
            <DIV align=left>
            <STRONG>
              <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor();
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ echo $veri12->adi; }
 ?>                       
&nbsp;-&nbsp;

              <?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>             </STRONG>
            </DIV>                 
          </TD>
          </TR>
          <TR>
        
          <TD colSpan=4 nowrap="nowrap">
            <DIV align=left>
            <STRONG>
<?php echo $veri1->metrekare; ?> m&sup2; &nbsp;           

                    <?php
		  if($veri1->bina_kat_sayisi == 0) {echo "Bilgi Yok";} 
		  elseif ($veri1->bina_kat_sayisi == 100) {echo "M&uuml;stakil Yap&#305;n&#305;n";}
		  elseif ($veri1->bina_kat_sayisi == 101) {echo "Dubleks Yap&#305;n&#305;n";}
		  elseif ($veri1->bina_kat_sayisi == 102) {echo "Tripleks Yap&#305;n&#305;n";} 

		  else
		  { echo $veri1->bina_kat_sayisi.'&nbsp;Katl&#305; Binan&#305;n'; }
		  ?> 
          &nbsp;
                    <?php
		  if($veri1->bulundugu_kat == 0) {echo "Bilgi Yok";} 
		  elseif ($veri1->bulundugu_kat == 100) {echo "Zemin Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 101) {echo "Bodrum Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 102) {echo "Yar&#305; Bodrum Kat&#305;";} 
		  elseif ($veri1->bulundugu_kat == 103) {echo "Giri&#351;               Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 104) {echo "Bah&ccedil;e Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 105)  {echo "&Ccedil;at&#305; Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 106) {echo "Y&uuml;ksek               Giri&#351; Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 107) {echo "Komplesi";}
		  elseif ($veri1->bulundugu_kat == 108) {echo "&Ccedil;at&#305; Dubleksi";}
          elseif ($veri1->bulundugu_kat == 109) {echo "Dubleksi";}
		  elseif ($veri1->bulundugu_kat == 110) {echo "Tribleksi";}
		  else
		  { echo $veri1->bulundugu_kat.'.&nbsp;Kat&#305;'; }
		  ?>            
           &nbsp;-&nbsp;             <?php 
		  if($veri1->yapim_yili == 0) { echo "Bilgi Yok"; } else { echo $veri1->yapim_yili;  }
          ?> Yap&#305;m&#305;
          </STRONG>
            </DIV>
          </TD>
          
          </TR>   
<TR>
          <TD width="111" nowrap="nowrap">
            <DIV align=right><STRONG>Fiyat</STRONG></DIV></TD>
          <TD width=18>&nbsp;:&nbsp;</TD>
          <TD width="598">
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD><STRONG><?php echo ondalik($veri1->fiyat); ?></STRONG></TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD><STRONG>
               <?php if (!(strcmp(1, "$veri1->birim"))) {echo "TL";} ?>
              <?php if (!(strcmp(2, "$veri1->birim"))) {echo "Euro";} ?>
              <?php if (!(strcmp(3, "$veri1->birim"))) {echo "USD";} ?>
			<?php if (!(strcmp(4, "$veri1->birim"))) {echo "GBP";} ?> </STRONG>
               </TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD>&nbsp;</TD></TR></TBODY></TABLE></TD>
          <TD width=8>&nbsp;</TD></TR>                  
  <TR>
          <TD>
            <DIV align=right><STRONG>Oda Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
        <?php 
		  if($veri1->oda_sayi == 0) { echo "Bilgi Yok"; } else { echo $veri1->oda_sayi .'&nbsp;Oda';  }
          ?>  
          
         </TD></TR>  
        <TR>
          <TD>
            <DIV align=right><STRONG>Salon Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
           <?php 
		  if($veri1->salon_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->salon_sayisi .'&nbsp;Salon';  }
          ?> 
          
          </TD></TR>   
        <TR>
          <TD>
            <DIV align=right><STRONG>Yatak Odas&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
		  if($veri1->yatak_odasi_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->yatak_odasi_sayisi .'&nbsp;Yatak Odas&#305;';  }
          ?> 
          
          </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Banyo Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
		  if($veri1->banyo_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->banyo_sayisi .'&nbsp;Banyolu';  }
          ?> 
          
          </TD></TR>                        
                 

       
        <TR>
          <TD nowrap="nowrap"><div align="right"><strong>&#304;lan Tarihi</strong></div></TD>
          <TD align="center">&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php echo date("d-m-Y",strtotime($veri1->bas_tarihi)); ?></TD>
        </TR> 
  
  
  
  
         </table>
       
                
                
                </td>
                <td width="50%">
    <!--ilan özelliklerinin sag tarafi -->            
     <table width="100%" border="0">
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305; Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php 
  $vt->sql("select adi from yapi_tipi where id = '".$veri1->yapi_tipi."' ")->sor();
  echo $vt->alTek();
?>
       
          </TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305;n&#305;n Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            
            <?php 
  $vt->sql("select adi from yapi_durum where id = '".$veri1->yapi_durum."' ")->sor();
  echo $vt->alTek();
?> 
            
            </TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Kullan&#305;m Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            
          <?php 
  $vt->sql("select adi from kullanim_durumu where id = '".$veri1->kullanim_durumu."' ")->sor();
  echo $vt->alTek();
?>   
            </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Is&#305;nma Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
                          <?php 
  $vt->sql("select adi from isinma_tipi where id = '".$veri1->isinma_tipi."' ")->sor();
  echo $vt->alTek();
?>
           </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Yak&#305;t Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
                           <?php 
  $vt->sql("select adi from yakit_tipi where id = '".$veri1->yakit_tipi."' ")->sor();
  echo $vt->alTek();
?>
           </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Balkon</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD>
           <?php 
  $vt->sql("select adi from balkon where id = '".$veri1->balkon."' ")->sor();
  echo $vt->alTek();
?>       
                
                
                </TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD></TR></TBODY></TABLE></TD></TR>
                
        <TR>
          <TD nowrap="nowrap"> <DIV align=right><STRONG>Bah&ccedil;e</STRONG></DIV></TD>
          <TD align="center">&nbsp;:&nbsp;</TD>
          <TD colSpan=2>          <?php 
  $vt->sql("select adi from bahce where id = '".$veri1->bahce."' ")->sor();
  echo $vt->alTek();
?> </TD>
        </TR>  
             
        <TR>
          <TD>
           <div align=right><strong>Teslim Tarihi</strong></div></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          <TABLE border=0 cellSpacing=0 cellPadding=0>
          <TBODY>
          <TR>
          <TD><?php echo date("d-m-Y",strtotime($veri1->satis_tarihi)); ?>
             
                
                
           </TD>
           </TR>
           </TBODY>
           </TABLE>
           </TD>
           </TR>
               
</table>
           
                
                </td>
              </tr>
            </table>
        
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
    
       <tr><td colspan="4"><?php 
if($veri1->kredi == 1) {
?>
	
 <script src="faiz_hesapla.js" type="text/javascript"></script>


<form method="POST" name="loandata" id="loandata" target="_blank">
					
<div align="center">
  <center>
	<table cellspacing="2" cellpadding="2" border="0" width="600" height="75" style="border-collapse: collapse" bordercolor="#111111">
		<tr>
			<td width="396" height="25" colspan="10" style="border-left-style: solid; border-left-width: 1px; border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">
			<address>
			<span style="font-style: normal"><b>
				<font face="Verdana" size="1" color="#FF0000">&nbsp;</font><font face="Verdana" size="1">TAHMiNi 
	KREDi HESAPLAMA TABLOSU</font></b></span>
			</address>
			<address>
			<span style="font-style: normal">
				<font face="Verdana" size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( Fiyat&#305;n %75'i hesaplanm&#305;&#351;t&#305;r )</font></span>
			</address></td>
			<td rowspan="2" width="144" height="71" style="border-style: solid; border-width: 1px">
			<div align="center">
				<table width="144" height="70">
					<tr>
						<td nowrap height="30" width="138" align="center">
						<div align="center"><b>
							<font face="Verdana" size="1" color="#FF0000">AYLIK ÖDEMESI</font></b></div>
						</td>
					</tr>
					<tr>
						<td align="center" height="34" width="138">
						<div align="center">
							<input type="text" name="payment" size="4" style="text-align: right; color:#FF0000; border: 0px none; background: ; font-size:12pt; font-family:Arial; font-weight:bold" value="">
							<b><font face="Arial" color="#FF0000">TL</font></b>
							<input type="hidden" name="total" value="">
							<input type="hidden" name="totalinterest" value="">
						</div></td>
					</tr>
				</table></div></td>
		</tr>
		<tr>
			<td width="68" height="36" align="right" style="border-left-style: solid; border-left-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">
			<font face="Arial" size="1">Kredi Tutar&#305;</font></td>
			<td width="48" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font face="Arial" size="1">
			<input type="text" name="principal" value="<?php echo ($veri1->fiyat)*75/100; ?>" size="6" onChange="calculate();" style="font-family: Arial; font-size: 8pt"></font></td>
			<td width="14" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font face="Arial" size="1">TL</font></td>
			<td width="4" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font size="1" face="Arial">&nbsp;</font></td>
			<td width="90" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font face="Arial" size="1">Faiz Oran&#305;</font>
			<font face="Arial" size="2">%</font></td>
			<td width="30" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<input type="text" name="interest" value="0.98" size="4" onChange="calculate();" style="font-family: Arial; font-size: 8pt"></td>
			<td width="4" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">&nbsp;</td>
			<td width="25" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font size="1" face="Arial">Vade</font></td>
			<td width="44" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<select name="years" onChange="calculate();" style="font-family: Arial; font-size: 8pt">
			<option value="" selected>Seçiniz</option>
			<option value="12">12</option>
			<option value="24">24</option>
			<option value="36">36</option>
			<option value="48">48</option>
			<option value="60">60</option>
			<option value="120">120</option>
			<option value="240">240</option>
			<option value="360">360</option></select></td>
			<td width="12" height="36" style="border-bottom-style: solid; border-bottom-width: 1px">
			<font size="1" face="Arial">Ay</font></td>
		</tr>
	</table></center>
</div>
 
					
				</form>

<?php } ?>

</td></tr>
       
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>&#304;&ccedil; Donan&#305;m</STRONG></DIV></TD>
          <TD width="13" valign="top">&nbsp;:&nbsp;</TD>
          <TD>
                          <?php 
 $vt->sql('select * from ilan_icdonanim where ilan_id="'.$veri1->id.'"   ')->sor();
 $veriler13 = $vt->alHepsi();
 
 foreach( $veriler13 as $veri13 )
{ 

$i = 0;
   for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from ic_donanim where id = '".$veri13->$ekleme."' ")->sor();
	 
if($vt->alTek() != '') { // echo $vt->alTek().'<br>';
$data_icdonanim[$i] = $vt->alTek();
$i++;
}

}
 
}
 echo resim_listele(3,2,2,$data_icdonanim); 
 ?>
 

 
 
<input name="icdonanim_id" type="hidden" value="<?php echo $ic_donanim_id; ?>" />            
        </TD>
          <TD width="150" rowspan="5" valign="top">
          <?php if($veri1->gx != "" and $veri1->gy !="" ) {   ?>
          <a href="http://maps.google.com/?q=<?php echo $veri1->gx.",".$veri1->gy; ?>" target="_blank"><img src="img/googlemaps.jpg" alt="Google Haritalarda g&ouml;rmek i&ccedil;in t&#305;klay&#305;n&#305;z" width="148" height="134" border="0" /></a>
          <?php } ?>
          </TD>
        </TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>D&#305;&#351; Donan&#305;m</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD>
                          <?php 
 $vt->sql('select * from ilan_disdonanim where ilan_id="'.$veri1->id.'"   ')->sor();
 $veriler14 = $vt->alHepsi();
 
 foreach( $veriler14 as $veri14 )
{
	$i=0;
	for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from dis_donanim where id = '".$veri14->$ekleme."' ")->sor();
	 
if($vt->alTek() != '') { //echo $vt->alTek().'<br>'; 
$data_disdonanim[$i] = $vt->alTek();
$i++;
}

}
}
echo resim_listele(3,2,2,$data_disdonanim);
 ?>
      <input name="disdonanim_id" type="hidden" value="<?php echo $dis_donanim_id; ?>" />
              
          </TD>
          </TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>&Ccedil;evre &Ouml;zellikleri</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD>
                                    <?php 
 $vt->sql('select * from ilan_cevreozellikleri where ilan_id="'.$veri1->id.'"   ')->sor();
 $veriler15 = $vt->alHepsi();

 foreach( $veriler15 as $veri15 )
{ 
$i=0;
for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from cevre_ozellikleri where id = '".$veri15->$ekleme."' ")->sor();
	 
if($vt->alTek() != '') {  //echo $vt->alTek().'<br>'; 
$data_cevre[$i] = $vt->alTek();
$i++;
}
}
}
echo resim_listele(3,2,2,$data_cevre);
 ?>
 <input name="cevreozellikleri_id" type="hidden" value="<?php echo $cevre_ozellikleri; ?>" />
           
          </TD>
          </TR>
       

        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>Adres</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD width="448" valign="top"><?php echo $veri1->adres; ?></TD>
          </TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>Posta Kodu </STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD valign="top"><?php echo $veri1->posta_kodu; ?>&nbsp;&nbsp;&nbsp;&nbsp; 
          <STRONG>&#304;l/&#304;l&ccedil;e/Semt</STRONG> &nbsp;&nbsp;<?php echo $veri1->il_ilce; ?></TD>
          </TR>
       
        <TR>
          <TD colSpan=4><BR><FONT color=#008000 size=4><STRONG>Gayrimenkul 
            A&ccedil;&#305;klama Alan&#305;</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>A&ccedil;&#305;klama</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD align="left" valign="top"><?php echo $veri1->aciklama; ?><BR></TD>
          <TD>&nbsp;</TD></TR>
       
       
    <TR>
          <TD noWrap><DIV align=right><STRONG>G&ouml;r&uuml;nt&uuml;lenme say&#305;s&#305;</STRONG></DIV></TD>
          <TD> &nbsp;:</TD>
          <TD><?php echo $veri1->hit; ?></TD>
          <TD>&nbsp;</TD></TR>
       
        
        
       
        <TR>
          <th colSpan=4 align="left">
   
          
            <DIV align=center>
<h5>&#304;LAN SAH&#304;B&#304; VE SORUMLUSU</h5>
              
          </DIV>
        
          
          
          
          <table width="100%" border="0">
           <?php
			  $vt->sql("select * from uyeler where id = '".$veri1->uye_id."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
			  ?>
            <tr>
              <td width="75%"> 
          <h4><?php echo $veri->sirket; ?></h4>   
         <h5><b> Ad&#305; Soyad&#305; : <?php echo $veri->isim_soyad; ?><br />
          Adres : <?php echo $veri->adres; ?> <br />
          Telefon : <?php echo $veri->kod1." ".$veri->tel1; ?> <br />
          Cep Telefon : <?php echo $veri->kod3." ".$veri->ceptel; ?> <br />
        
          </b></h5>
          </td>
              <td width="25%" align="right">
           <?php
			  $vt->sql("select * from logolar where user_id = '".$veri1->uye_id."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
				 if($veri->firma_logo != "") {
			 echo '<img src="resimler/'.$veri->firma_logo.'" width="127" height="112" />';
				 }
				 } ?>
            </td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="2">
            
              </td>
            </tr>
          
          </table>

  
    
    

     
        <?php 
			  $vt->sql("SELECT * FROM `bayi_eleman`, ilan_eleman where bayi_eleman.id= ilan_eleman.eleman_id and ilan_eleman.ilan_id='".$veri1->id."' group by ilan_eleman.ilan_id")->sor();
			  $veriler = $vt->alhepsi();
			  foreach($veriler as $veri) {
				  ?>
              <p>Sorumlu Sat&#305;&#351; Temsilcileri</p>
              <table width="100%" border="0">
                <tr>
                  <th align="left">Ad&#305; Soyad&#305; : <?php echo $veri->isim_soyad; ?>&nbsp;&nbsp;&nbsp;<br />
                  Telefon : <?php echo $veri->telefon; ?> &nbsp;&nbsp;&nbsp;<br />
                  Cep Telefon : <?php echo $veri->cep; ?>&nbsp;&nbsp;&nbsp;</th>
                  <td align="right"><?php echo '<img src="resimler/'.$veri->foto.'" width="100" height="90" />'; ?></td>
                </tr>
              </table> 
             
              <?php 
			  } 
			  ?>  
          
          
        
        
        </th></TR>
        <TR>
          <TD colSpan=4 align="left">  <h5>
            <a href="?action=arama&uye=<?php echo $veri1->uye_id; ?>&liste=1">
            Bu &uuml;yenin di&#287;er ilanlar&#305; i&ccedil;in t&#305;klay&#305;n&#305;z...
              
          </a>  </h5> &nbsp;</TD>
        </TR>
          
  
  
  
          
          </TBODY>
      </TABLE>
          <?php 
		  }		
		
  }
?>
 <BR><BR>