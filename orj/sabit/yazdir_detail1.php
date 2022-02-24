

              <?php 

		
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'" ')->sor(100);
  if($vt->numRows() == 0) {
	  
	 
	 echo "<h3>Uyari ! Uyari Kodu D1100.<br>
	 Belirttiginiz Ilan Bulunamamistir.<br>
	 
	 Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";  
	  
	  } else {
 $veriler1 = $vt->alHepsi();


 foreach( $veriler1 as $veri1 )
{ 
$yeni_hit = $veri1->hit + 1;
$vt->sql("update ilan_ticari set hit = '".$yeni_hit ."' where id = '".$veri1->id."'")->sor(100);
?>    
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=1 cellPadding=1 width=100% align=center>
     
        <TBODY>
        <TR>
          <TD colspan="3" align="center">
            <h3>       
              
              <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor(100);
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ echo $veri12->adi; }
 ?>
              
              
              <?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor(100);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor(100);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor(100);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>  
            </h3>
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
   $vt->sql("select * from ilan_foto where ilan_id = '".$veri1->id."' limit 0,1")->sor(100);
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
          
          
          
          <BR>
            <FONT color=#008000 size=4><STRONG>Gayrimenkul 
              Bilgi Alan&#305;</STRONG></FONT>
          </p>
            <table width="100%" border="0">
              <tr>
                <td width="50%">
  <!--ilan özelliklerinin sol tarafi -->              
         <table width="100%" border="0">
     <TR>
          <TD width="111" nowrap="nowrap">
            <DIV align=right><STRONG>Fiyat</STRONG></DIV></TD>
          <TD width=18>&nbsp;:&nbsp;</TD>
          <TD width="598">
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD><?php echo ondalik($veri1->fiyat); ?></TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD>
               <?php if (!(strcmp(1, "$veri1->birim"))) {echo "TL";} ?>
              <?php if (!(strcmp(2, "$veri1->birim"))) {echo "Euro";} ?>
              <?php if (!(strcmp(3, "$veri1->birim"))) {echo "USD";} ?>
			<?php if (!(strcmp(4, "$veri1->birim"))) {echo "GBP";} ?>
               </TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD>&nbsp;</TD></TR></TBODY></TABLE></TD>
          <TD width=8>&nbsp;</TD></TR>
       
        
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305; Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php 
  $vt->sql("select adi from yapi_tipi where id = '".$veri1->yapi_tipi."' ")->sor(100);
  echo $vt->alTek();
?>
       
          </TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305;n&#305;n Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            
            <?php 
  $vt->sql("select adi from yapi_durum where id = '".$veri1->yapi_durum."' ")->sor(100);
  echo $vt->alTek();
?> 
            
            </TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Kullan&#305;m Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            
          <?php 
  $vt->sql("select adi from kullanim_durumu where id = '".$veri1->kullanim_durumu."' ")->sor(100);
  echo $vt->alTek();
?>   
            </TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Metrekare</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php echo $veri1->metrekare; ?>&nbsp;&nbsp; m&sup2;</TD></TR>
       
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bulundu&#287;u Kat</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          <?php
		  if($veri1->bulundugu_kat == 0) {echo "Bilgi Yok";} 
		  elseif ($veri1->bulundugu_kat == 100) {echo "Zemin Kat";}
		  elseif ($veri1->bulundugu_kat == 101) {echo "Bodrum";}
		  elseif ($veri1->bulundugu_kat == 102) {echo "Yar&#305; Bordum";} 
		  elseif ($veri1->bulundugu_kat == 103) {echo "Giri&#351;               Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 104) {echo "Bah&ccedil;e Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 105)  {echo "&Ccedil;at&#305; Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 106) {echo "Y&uuml;ksek               Giri&#351;";}
		  elseif ($veri1->bulundugu_kat == 107) {echo "Asma Kat&#305;";}
		  elseif ($veri1->bulundugu_kat == 108) {echo "&Ccedil;at&#305; Dubleksi";}
          elseif ($veri1->bulundugu_kat == 109) {echo "Dubleks";}
		  elseif ($veri1->bulundugu_kat == 110) {echo "Tribleks";}
		  else
		  { echo $veri1->bulundugu_kat.'.&nbsp;Kat'; }
		  ?>
          
 </TD></TR>
       
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bina Kat Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          <?php 
		  if($veri1->bina_kat_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->bina_kat_sayisi .'Kat';  }
          ?>
          
		 

</TD></TR>
       
        <TR>
          <TD nowrap="nowrap">
            <DIV align=right><STRONG>Yap&#305;m Y&#305;l&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
              <?php 
		  if($veri1->yapim_yili == 0) { echo "Bilgi Yok"; } else { echo $veri1->yapim_yili;  }
          ?>
          
		  </TD></TR>
        <TR>
          <TD nowrap="nowrap"><div align=right><strong>Kira/Sat&#305;&#351; Tarihi</strong></div></TD>
          <TD>:</TD>
          <TD colSpan=2><?php echo $veri1->satis_tarihi; ?></TD>
        </TR> 
  
  
  
  
         </table>
       
                
                
                </td>
                <td width="50%">
    <!--ilan özelliklerinin sag tarafi -->            
     <table width="100%" border="0">
  <TR>
          <TD>
            <DIV align=right><STRONG>Oda Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
        <?php 
		  if($veri1->oda_sayi == 0) { echo "Bilgi Yok"; } else { echo $veri1->oda_sayi .'Oda';  }
          ?>  
          
         </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Salon Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          
           <?php 
		  if($veri1->salon_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->salon_sayisi .'Salon';  }
          ?> 
          
          </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Yatak Odas&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
		  if($veri1->yatak_odasi_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->yatak_odasi_sayisi .'Yatak Odas&#305;';  }
          ?> 
          
          </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Banyo Say&#305;s&#305;</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
		  if($veri1->banyo_sayisi == 0) { echo "Bilgi Yok"; } else { echo $veri1->banyo_sayisi .'Banyo';  }
          ?> 
          
          </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Is&#305;nma Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
                          <?php 
  $vt->sql("select adi from isinma_tipi where id = '".$veri1->isinma_tipi."' ")->sor(100);
  echo $vt->alTek();
?>
           </TD></TR>
       
        <TR>
          <TD>
            <DIV align=right><STRONG>Yak&#305;t Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
                           <?php 
  $vt->sql("select adi from yakit_tipi where id = '".$veri1->yakit_tipi."' ")->sor(100);
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
  $vt->sql("select adi from balkon where id = '".$veri1->balkon."' ")->sor(100);
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
          <TD>
            <DIV align=right><STRONG>Bah&ccedil;e</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD>
          <?php 
  $vt->sql("select adi from bahce where id = '".$veri1->bahce."' ")->sor(100);
  echo $vt->alTek();
?>              
                
                
               </TD></TR></TBODY></TABLE></TD></TR>
</table>
           
                
                </td>
              </tr>
            </table>
        
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
    
       <tr><td colspan="4">

</td></tr>
       
       
        <TR>
          <TD valign="top">
            <DIV align=right><STRONG>&#304;&ccedil; Donan&#305;m</STRONG></DIV></TD>
          <TD width="13" valign="top">&nbsp;:&nbsp;</TD>
          <TD>
                          <?php 
 $vt->sql('select * from ilan_icdonanim where ilan_id="'.$veri1->id.'"   ')->sor(100);
 $veriler13 = $vt->alHepsi();
 
 foreach( $veriler13 as $veri13 )
{ 

$i = 0;
   for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from ic_donanim where id = '".$veri13->$ekleme."' ")->sor(100);
	 
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
 $vt->sql('select * from ilan_disdonanim where ilan_id="'.$veri1->id.'"   ')->sor(100);
 $veriler14 = $vt->alHepsi();
 
 foreach( $veriler14 as $veri14 )
{
	$i=0;
	for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from dis_donanim where id = '".$veri14->$ekleme."' ")->sor(100);
	 
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
 $vt->sql('select * from ilan_cevreozellikleri where ilan_id="'.$veri1->id.'"   ')->sor(100);
 $veriler15 = $vt->alHepsi();

 foreach( $veriler15 as $veri15 )
{ 
$i=0;
for ($sayac = 1; $sayac <= 32 ; $sayac++ ) 
{
$ekleme = 'a'.$sayac;
$vt->sql("select adi from cevre_ozellikleri where id = '".$veri15->$ekleme."' ")->sor(100);
	 
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
          <STRONG>&#304;l/&#304;l&ccedil;e/Semt</STRONG> :&nbsp;&nbsp;              <?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor(100);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
              <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor(100);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
              <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor(100);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>  </TD>
          </TR>
       
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
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
          
            <DIV align=center><h5>&#304;LAN SAH&#304;B&#304; VE SORUMLUSU</h5> 
              
          </DIV>
        
          
          
          
          <table width="100%" border="0">
           <?php
			  $vt->sql("select * from uyeler where id = '".$veri1->uye_id."'")->sor(100);
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
			  ?>
            <tr>
              <td width="75%"> 
          <h4><?php echo $veri->sirket; ?></h4>   
         <h5><b> Adı Soyadı :<?php echo $veri->isim_soyad; ?><br />
          Addres :<?php echo $veri->adres; ?> <br />
          Telefon : <?php echo $veri->kod1." ".$veri->tel1; ?> <br />
          Cep :<?php echo $veri->kod3." ".$veri->ceptel; ?> <br />
        
          </b></h5>
          </td>
              <td width="25%" align="right">
           <?php
			  $vt->sql("select * from logolar where user_id = '".$veri1->uye_id."'")->sor(100);
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
			  $vt->sql("SELECT * FROM `bayi_eleman`, ilan_eleman where bayi_eleman.id= ilan_eleman.eleman_id and ilan_eleman.ilan_id='".$veri1->id."' group by ilan_eleman.ilan_id")->sor(100);
			  $veriler = $vt->alhepsi();
			  foreach($veriler as $veri) {
				  ?>        Sorumlu Sat&#305;&#351; Temsilcileri
              <table width="100%" border="0">
                <tr>
                  <th align="left">Adı Soyadı :<?php echo $veri->isim_soyad; ?>&nbsp;&nbsp;&nbsp;<br />
                  Telefon :<?php echo $veri->telefon; ?> &nbsp;&nbsp;&nbsp;<br />
                  Cep Telefon : <?php echo $veri->cep; ?>&nbsp;&nbsp;&nbsp;</th>
                  <td align="right"><?php echo '<img src="resimler/'.$veri->foto.'" width="100" height="90" />'; ?></td>
                </tr>
              </table> 
             
              <?php 
			  } 
			  ?>  
          
          
        
        
        </th></TR>
        <TR>
          <TD colSpan=4 align="left">&nbsp;</TD>
        </TR>
          
  
  
  
          
          </TBODY>
      </TABLE>
          <?php 
		  }		
		
  }
?>
 <BR><BR>
