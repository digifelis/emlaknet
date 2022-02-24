<?php 

		
		
		/* degisiklikler yapildi simdi listeleme kismi */
		
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'"  ')->sor();
  if($vt->numRows() == 0) {
	  
	 echo "<h3>Uyari ! Uyari Kodu D2100.<br>
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
<font size="2" color="#000000"><h3>    
              
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
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?><br />
 Toplam Alan: <?php echo $veri1->toplam_metrekare; ?>&nbsp;m&sup2;&nbsp;
 Kullan&#305;labilir Alan: <?php echo $veri1->kullanilabilir_metrekare; ?>&nbsp;m&sup2;
<font color="#FF0000"> <?php echo ondalik($veri1->fiyat); ?>&nbsp;
                <?php if (!(strcmp(1, "$veri1->birim"))) {echo "TL";} ?>
              <?php if (!(strcmp(2, "$veri1->birim"))) {echo "Euro";} ?>
              <?php if (!(strcmp(3, "$veri1->birim"))) {echo "USD";} ?>
			<?php if (!(strcmp(4, "$veri1->birim"))) {echo "GBP";} ?></font>
            
</b></font>
          </TD>
          <TD align="left" nowrap="nowrap"><font size="2" color="#000000"><b>&#304;LAN NO&nbsp;:&nbsp;<?php echo $veri1->id; ?><br />
          DOSYA NO :&nbsp;<?php echo $veri1->dosya_no; ?>          </h3></font></TD>
          </TR>
        <TR>
          <TD colSpan=4>
           
            <table width="100%" align="center">
              <tr>
    <th align="center" valign="top" scope="row"> 
    
    
    
    <table width="100%">
  <tr>
    <td> <?php 
   $vt->sql("select * from ilan_foto where ilan_id = '".$veri1->id."' limit 0,1")->sor();
   $veriler = $vt->alHepsi();
  if($vt->numRows() > 0) {  
   foreach($veriler as $veri) {
	  $fotomuz = $veri->foto_adi; 
   
	 echo '  
  <img src="thumb.php?p=resimler/'.$fotomuz.'&w=510&h=400"  name="resim" width="510" height="400"  /> ';  
	 } 
	 
  } else {
	  
  $vt->sql("select * from logolar where user_id = '".$veri1->uye_id."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
				 if($veri->firma_logo != "") {
			 echo '<img src="resimler/'.$veri->firma_logo.'" width="510" height="400" />';
				 }
				 }	  
  }
  
	 ?></td>
    <td>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye - işyeri ilanları ayrıntı bölümü */
google_ad_slot = "2591858845";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye -işyeri ilanları sayfası */
google_ad_slot = "3732640964";
google_ad_width = 120;
google_ad_height = 240;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</td>
  </tr>
</table>
    
    
    
     </th>
    </tr>
  <tr>
    <th align="left" valign="top" scope="row"> <div class="scroll1">                   
      <?php 
   $vt->sql("select * from ilan_foto where ilan_id = '".$veri1->id."' ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
	$data[$i] = '  <DIV style="PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 1px; PADDING-TOP: 2px">
<IMG border=0 src="thumb.php?p=resimler/'.$veri->foto_adi.'&w=85&h=64"  onmouseover="resim.src=\'thumb.php?p=resimler/'.$veri->foto_adi.'&w=510&h=400\'" >  </DIV>'; 
	$i++;
	 } 
 echo resim_listele(8,1,1,$data); 
 
 ?>
      
      </div> &nbsp;</th>
    </tr>
</table>

 
          </TD></TR>
       
       
        <TR>
          <TD colSpan=4><p>
            <DIV>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         <font size="2" color="#000000"><b>
Bu ilan&#305; 
<font color="#00FF00"><span style="background-color: #000000">&nbsp;&nbsp;&nbsp;
<?php echo $veri1->hit; ?>&nbsp;&nbsp;&nbsp;
</span></font>
&nbsp;kullan&#305;c&#305; ziyaret etmi&#351;tir.</b></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="yazdir.php?action=detail&id=<?php echo temizle($_GET["id"]); ?>" target="_blank"><font size="2" color="#000080"><b>Bu ilan&#305; yazd&#305;r</b></font></a>


<br>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f3fee68087caafe"></script>
<!-- AddThis Button END -->






            </DIV>      



<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> 

 <FONT color=#008000 size=2><STRONG>Gayrimenkul 
              Bilgi Alan&#305;</STRONG></FONT>

</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>



           
  
            <table width="100%" border="0">
  <tr>
    <td width="50%">
<!-- ilan özellikleri sol tarafi  -->  
 <table width="100%" border="0">
        <TR>
          <TD colSpan=4 nowrap="nowrap">
            <DIV align=left>
            <h4>
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
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>       
 <br />
 Toplam Alan: <?php echo $veri1->toplam_metrekare; ?>&nbsp;m&sup2;&nbsp;
 Kullan&#305;labilir Alan: <?php echo $veri1->kullanilabilir_metrekare; ?>&nbsp;m&sup2;
       </h4>
            </DIV>    
                         
          </TD>
          </TR> 
<tr>
<TD width="173" nowrap="nowrap">
            <DIV align=right><STRONG>Fiyat</STRONG></DIV></TD>
          <TD width=18>&nbsp;:&nbsp;</TD>
          <TD width="620">
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD>
                <STRONG>
				<?php echo ondalik($veri1->fiyat); ?>
                </STRONG>
                </TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD><STRONG>
               <?php if (!(strcmp(1, "$veri1->birim"))) {echo "TL";} ?>
              <?php if (!(strcmp(2, "$veri1->birim"))) {echo "Euro";} ?>
              <?php if (!(strcmp(3, "$veri1->birim"))) {echo "USD";} ?>
			<?php if (!(strcmp(4, "$veri1->birim"))) {echo "GBP";} ?></STRONG>
               </TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD>&nbsp;</TD></TR></TBODY></TABLE></TD>
          <TD width=5>&nbsp;</TD></TR>
<TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305; Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php 
  $vt->sql("select adi from yapi_tipi where id = '".$veri1->yapi_tipi."' ")->sor();
  echo $vt->alTek();
?>
       
          </TD>
          </TR>  
             
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Yap&#305;n&#305;n Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
<?php 
  $vt->sql("select adi from yapi_durum where id = '".$veri1->yapi_durum."' ")->sor();
  echo $vt->alTek();
?>
          
           </TD></TR>   
       <TR>
          <TD nowrap="nowrap"><div align="right"><strong>Teslim Tarihi</strong></div></TD>
          <TD align="center">&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php echo $veri1->satis_tarihi; ?></TD>
        </TR>                         
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
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Kullan&#305;m Amac&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
          <?php 
  $vt->sql("select adi from kullanim_amaci where id = '".$veri1->kullanim_amaci."' ")->sor();
  echo $vt->alTek();
?>
          
            </TD></TR> 



 </table>
   
    
    
    </td>
    <td width="50%">
<!-- ilan özellikleri sag tarafi   --> 
    <br />
 <table width="100%" border="0">
 
       
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bina Kat Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
           <?php 
		  if($veri1->bina_kat_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->bina_kat_sayisi .'Kat';  }
          ?>
          
           </TD></TR>          
  <tr>
   
<TD noWrap>
            <DIV align=right><STRONG>Bulundu&#287;u Kat</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
          <?php
		  if($veri1->bulundugu_kat == 0) {echo "Bilgi Yok";} 
		  elseif ($veri1->bulundugu_kat == 100) {echo "Zemin Kat";}
		  elseif ($veri1->bulundugu_kat == 101) {echo "Bodrum Kat";}
		  elseif ($veri1->bulundugu_kat == 102) {echo "Yar&#305; Bodrum";} 
		  elseif ($veri1->bulundugu_kat == 103) {echo "Giri&#351;               Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 104) {echo "Bah&ccedil;e Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 105)  {echo "&Ccedil;at&#305; Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 106) {echo "Y&uuml;ksek               Giri&#351; Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 107) {echo "Komplesi";}
		  elseif ($veri1->bulundugu_kat == 108) {echo "&Ccedil;at&#305; Dubleksi";}
          elseif ($veri1->bulundugu_kat == 109) {echo "Dubleksi";}
		  elseif ($veri1->bulundugu_kat == 110) {echo "Tribleksi";}
		  else
		  { echo $veri1->bulundugu_kat.'.&nbsp;Kat&#305;"'; }
		  ?>
          
          
           </TD></TR>
       

       
        <TR>
          <TD>
            <DIV align=right><STRONG>Yap&#305;m Y&#305;l&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
           <?php 
		  if($veri1->yapim_yili == 0) { echo "Bilgi Yok"; } else { echo $veri1->yapim_yili;  }
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
           </TD>   
   
   
  </tr>
        <TR>
          <TD nowrap="nowrap"><div align="right"><strong>&#304;lan Tarihi</strong></div></TD>
          <TD> &nbsp;:</TD>
          <TD colSpan=2><?php echo date("d-m-Y",strtotime($veri1->bas_tarihi)); ?></TD>
        </TR>   
</table>
   
    
    
    
    
    
    
    
    </td>
  </tr>
</table>
            
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
							<input type="text" name="payment" size="4" style="text-align: right; color:#FF0000; border: 0px none; background: ; font-size:12pt; font-family:Arial; font-weight:bold">
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
			<font face="Arial" size="1">Faiz Oran&#305;</font><font face="Arial" size="2">%</font></td>
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
          <TD width="11" valign="top">&nbsp;:&nbsp;</TD>
          <TD><?php 
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
 ?>            <input name="icdonanim_id" type="hidden" value="<?php echo $ic_donanim_id; ?>" />            
        </TD>
          <TD rowspan="3" valign="top">&nbsp;</TD>
        </TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>D&#305;&#351; Donan&#305;m</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD><?php 
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
 ?>            <input name="disdonanim_id" type="hidden" value="<?php echo $dis_donanim_id; ?>" />
              
          </TD>
          </TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>&Ccedil;evre &Ouml;zellikleri</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD valign="top"><?php 
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
 ?>            <input name="cevreozellikleri_id" type="hidden" value="<?php echo $cevre_ozellikleri; ?>" />
           
          </TD>
          </TR>
       

        <TD valign="top">
            <DIV align=right><STRONG>Adres</STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD width="469"><?php echo $veri1->adres; ?></TD>
          <TD width="113" rowspan="2" valign="top"><?php if($veri1->gx != "" and $veri1->gy !="" ) {   ?>
            <a href="http://maps.google.com/?q=<?php echo $veri1->gx.",".$veri1->gy; ?>&z=15" target="_blank"><img src="img/googlemaps.jpg" alt="Google Haritalarda g&ouml;rmek i&ccedil;in t&#305;klay&#305;n&#305;z" width="148" height="134" border="0" /></a>
            <?php } ?>
            &nbsp;</TD></TR>
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>Posta Kodu </STRONG></DIV></TD>
          <TD valign="top">&nbsp;:&nbsp;</TD>
          <TD valign="top"><?php echo $veri1->posta_kodu; ?>&nbsp;&nbsp;&nbsp;&nbsp; 
          <STRONG>&#304;l/&#304;l&ccedil;e/Semt</STRONG> :&nbsp;&nbsp;<?php 
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
 ?></TD>
        </TR>
       
        <TR>
          <TD colSpan=4>
  
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye ana sayfa */
google_ad_slot = "6345695723";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> 

          <FONT color=#008000 size=2><STRONG>Gayrimenkul 
            A&ccedil;&#305;klama Alan&#305;</STRONG></FONT>

</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>

        

            
          </TD></TR>
          
          
          <TR>
          <TD>&nbsp;</TD>
          <TD>&nbsp;</TD>
          <TD align="left" valign="top"> <?php if($veri1->video != "" ) {   ?>
          <?php echo $veri1->video ?>
          <?php } ?>&nbsp;</TD>
          <TD>&nbsp;</TD>
        </TR>
          
          
 
        <TR>
          <TD>
            <DIV align=right><STRONG>A&ccedil;&#305;klama</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><?php echo $veri1->aciklama; ?><BR></TD>
          <TD>&nbsp;   </TD></TR>

       
        <TR>
          <th colSpan=4 align="left">
   


   
          
          
           <DIV align=left>
   

<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> 

<FONT color=#008000 size=2><STRONG>&#304;lan Sahibi ve Sorumlusu</STRONG></FONT>

</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>

        

            
              
          </DIV>
        
          
          
          
          <table width="100%" border="0">
           <?php
			  $vt->sql("select * from uyeler where id = '".$veri1->uye_id."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
			  ?>
            <tr>
              <td width="75%"> 
          <font size="3" color="#000000"><b><?php echo $veri->sirket; ?></b></font><p><font size="2" color="#000000"><b>
         &#304;sim&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $veri->isim_soyad; ?><br />
         Adres : <?php echo $veri->adres; ?>
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <?php echo $veri->ilce; ?>&nbsp;/&nbsp;<?php 
		  $vt->sql('select sehiradiUpper  from sehir where sehirID="'.$veri->il.'" ')->sor();
		  echo $vt->alTek();
		  ?>
          <?php 
if($veri->tel1 != "") {
	echo "<br />Tel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
echo $veri->kod1." ".$veri->tel1."";
}
?>
<?php 
if($veri->fax != "") { 
	echo "<br /> Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
echo $veri->kod2." ".$veri->fax."&nbsp;-&nbsp;";
}
?>

<?php 
if($veri->ceptel != "") {
	echo "<br />Cep&nbsp;&nbsp;&nbsp;&nbsp;: ";
echo $veri->kod3." ".$veri->ceptel."";
}
?> 
<br />
        </b></font>
          </td>
              <td width="25%" align="right">
           <?php
			  $vt->sql("select * from logolar where user_id = '".$veri1->uye_id."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) { 
			 if($veri->firma_logo != "") {
			 echo '<img src="resimler/'.$veri->firma_logo.'" width="160" height="120" />';
			 }} ?>
            </td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="2">
            
              </td>
            </tr>
          
          </table>
          
        <?php 
			  $vt->sql("SELECT * FROM `bayi_eleman`, ilan_eleman where bayi_eleman.id= ilan_eleman.eleman_id and ilan_eleman.ilan_id='".$veri1->id."'  group by ilan_eleman.ilan_id")->sor();
			  $veriler = $vt->alhepsi();
			  foreach($veriler as $veri) {
				  ?>
<br />
       <DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> 

<FONT color=#008000 size=2><STRONG>Sorumlu Sat&#305;&#351; Temsilcileri</STRONG></FONT>

</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>
              <table width="100%" border="0">
                <tr>
                  <th align="left"><font size="2" color="#000000"><b>&#304;sim : <?php echo $veri->isim_soyad; ?>&nbsp;&nbsp;&nbsp;
                  
          <?php 
if($veri->telefon != "") {
	echo "<br />Tel&nbsp;&nbsp;&nbsp;: ";
echo $veri->telefon;
}
?>                  
                  <br />
                  Cep : <?php echo $veri->cep; ?>&nbsp;&nbsp;&nbsp;&nbsp;</b></font></th>
                  <td align="right">
	<?php 
	if($veri->foto != '') {
	echo '
<img src="resimler/'.$veri->foto.'" width="100" />
  ';
} else {	

	}
	
	?>           
                  </td>
                </tr>
              </table> 
             
              <?php 
			  } 
			  ?>  
          
          
         
           
           
           
           
          </th></TR>
          <tr><td colspan="4"><font size="2" color="#000000"><b>
   <a href="index.php?action=arama&uye=<?php echo $veri1->uye_id; ?>&liste=1">
            Bu &uuml;yenin di&#287;er ilanlar&#305; i&ccedil;in t&#305;klay&#305;n&#305;z...
    </a>          
</b></font></td></tr>
        </TBODY>
              
        </TABLE>
                  <?php 
		  }		
  }
		
?>

<BR><BR>