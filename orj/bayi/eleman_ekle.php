<?php 
if (temizle($_POST["subaction"])== "eleman_ekle" )
{
	  /////////////////////////
	$vt->sql("insert into ilan_eleman (id,ilan_id,eleman_id) values ('','".temizle($_GET["id"])."','".temizle($_POST["id"])."') ");
	if($vt->sor()==0) {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu ELEMANE1100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

}
if (temizle($_POST["subaction"])== "delete" )
{
	$vt->sql("delete from ilan_eleman where id = '".temizle($_POST["id"])."' ");	
	if($vt->sor()==0) {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu ELEMANE1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
}
?>


<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=satis%20elemani_dosyalar/fahne1.gif 
width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="satis%20elemani_dosyalar/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Satýþ 
            Elemaný</FONT></STRONG></DIV></TD>
          <TD background=satis%20elemani_dosyalar/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="satis%20elemani_dosyalar/spacer.gif" width=1 
          height=2><BR></DIV></TD>
          <TD vAlign=top background=satis%20elemani_dosyalar/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="satis%20elemani_dosyalar/spacer.gif" width=11 height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>Satýþ Elemaný / Yetkili Kiþi 
                  Ekleme Formu</STRONG></FONT><BR><BR>Se&ccedil;miþ Olduðunuz Ýlana, 
                  Ýlgili Kiþiyi Eklemek Ý&ccedil;in "Ekle" Butonunu Týklayýnýz <BR><BR>
                  <HR SIZE=1 width="100%" noShade>

                  <TABLE border=0 cellSpacing=2 cellPadding=2 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
     
                      <TD>
                      <STRONG>
                      
                                       
                                         
                    <?php 
					
					$vt->sql('select id,uye_id , tarih,ilan_tipi_id,ilan_grup,il,ilce,koy,fiyat,birim,ilan_suresi,bas_tarihi,hit,onay from ilan_ticari  where uye_id = "'.$_SESSION["id"].'"  and id= "'.$_GET["id"].'"     ')->sor();
					  $veriler = $vt->alHepsi();
					  foreach($veriler as $veri) {
					
					
					
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 echo $vt->alTek() ."&nbsp;-&nbsp;";


$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek() ."&nbsp;-&nbsp;";

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'" ')->sor();
echo $vt->alTek() ."&nbsp;-&nbsp;";

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek() ."&nbsp;-&nbsp;";
					  }
 ?>  

                      
                      
                      
                  
                      
                      
                      </STRONG> (Ýlan 
                        ÝD: <?php echo temizle($_GET["id"]); ?>) <BR>
                        <BR><BR><STRONG>Kayýtlý Satýþ Elemaný:</STRONG> 
                        <BR>
                        
                        <table width="40%" border="0">
                        <tbody>
                       
                          <?php 
$vt->sql("select * from ilan_eleman where ilan_id = '".temizle($_GET["id"])."' ")->sor();
if($vt->numRows() != 0) {
			$veriler = $vt->alHepsi();
			foreach($veriler as $veri) { 
			
				$vt->sql("select * from bayi_eleman where id = '".$veri->eleman_id."'")->sor();
				$veriler1 = $vt->alHepsi();
					foreach($veriler1 as $eleman) {
						
	echo '			
  
  <tr>
    <td>&nbsp;
	<FORM method=post action="">
   	<INPUT value=delete type=hidden name=subaction> 
   	<INPUT value='.$veri->id.' type=hidden name=id> 
  	<INPUT style="BACKGROUND-COLOR: #99ff99" class=myinput value=Sil type=submit name=change> 
   	</FORM>
	
	</td>
    <td>&nbsp;
	'.$eleman->isim_soyad.'<br>&nbsp; Telefon:&nbsp;'.$eleman->telefon.' , Cep:'.$eleman->cep.'
	
   
   </td>
  </tr>

';
   
	   
												}
										}
 }
			?>
            </tbody>
                        </table>
                        
                        
                        </TD></TR></TBODY></TABLE>
                  <HR SIZE=1 width="100%" noShade>
                  <BR>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD><STRONG>Satýþ Elemaný / Yetkili Kiþi Kayýt 
                        Listesi</STRONG></TD>
                      <TD><IMG border=0 
                        src="tema/img/FFFF00.gif" width=15 
                        height=15></TD>
                      <TD>Onay Aþamasýnda</TD>
                      <TD><IMG border=0 
                        src="tema/img/008000.gif" width=15 
                        height=15></TD>
                      <TD>Onaylanmýþtýr</TD></TR></TBODY></TABLE>
                  <TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD bgColor=#66cc66 width=16><STRONG>Konum</STRONG></TD>
                      <TD bgColor=#66cc66 
width=80><STRONG>Fotoðraf</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Ýsim / Soyisim</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Telefon No</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Cep Telefon No</STRONG></TD>
                      <TD bgColor=#66cc66>
                        <DIV align=center><STRONG>Ekle</STRONG></DIV></TD></TR>
                        
              <?php
			 $vt->sql("select * from bayi_eleman where uye_id = '".$_SESSION["id"]."'")->sor();
			 $veriler = $vt->alHepsi();
			 foreach($veriler as $veri) {
                        ?>
                    <TR>
                      <TD bgColor=#fff9ec>
                      <?php 
					  if($veri->onay == 1) {
						  echo '<DIV align=center><IMG border=0 
                        src="tema/img/008000.gif" width=15 
                        height=15> </DIV>';
					  } else {
						  
						  echo '<DIV align=center><IMG border=0 
                        src="tema/img/FFFF00.gif" width=15 
                        height=15> </DIV>';
					  }
					  
					  ?>
                      </TD>
                      <TD bgColor=#fff9ec>
                      <DIV align=center>
                      <?php 
					  if($veri->foto != "") {
						  echo '
                      <IMG border=0 
                        src="resimler/'.$veri->foto.'" width=80 
                        height=60> 
						';
					  }
					  ?>
                      </DIV>
                      </TD>
                      <TD bgColor=#fff9ec><?php echo $veri->isim_soyad; ?><BR></TD>
                      <TD bgColor=#fff9ec><?php echo $veri->telefon; ?></TD>
                      <TD bgColor=#fff9ec><?php echo $veri->cep; ?></TD>
                      
                      <TD bgColor=#fff9ec>
                        <DIV align=center>
   <FORM method=post action="">
   <INPUT value=eleman_ekle type=hidden name=subaction> 
   <INPUT value=<?php echo $veri->id; ?> type=hidden name=id> 
  <INPUT style="BACKGROUND-COLOR: #99ff99" class=myinput value=Ekle type=submit name=change> 
   </FORM>
                        
                        </DIV></TD></TR>
                    <?php } ?>    
                        
                    </TBODY></TABLE><BR><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>