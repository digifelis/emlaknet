<?php
///session_start();
if(temizle($_POST["email"]) <> "" ) {
	
if ($_SESSION["guv"] <> addslashes($_POST["kod"]) )   { 
header ("Location:index.php?action=giris&hata=1"); 
} else {

$vt->sql('select * from uyeler   where kullanici_adi = "'.temizle($_POST["email"]).'" and sifre="'.temizle($_POST["password"]).'" and onay=0 ');
 
 $vt->sor();
 
 if($vt->numRows()==1){
 $veriler = $vt->alHepsi();
foreach( $veriler as $veri )
{
//////  sessionlari baslat
/*
session_register("kullanici_adi");
session_register("isim_soyad");
session_register("uye_tipi");
session_register("id");
*/

$_SESSION['kullanici_adi'] = $veri->kullanici_adi;
$_SESSION['isim_soyad'] = $veri->isim_soyad;
$_SESSION['uye_tipi'] = $veri->uye_tipi;
$_SESSION['id'] = $veri->id;
$_SESSION['firma'] = $veri->sirket;
 header ("Location:start.php"); 

} 
			
			 
		} else { 
 header ("Location:index.php?action=giris&hata=2");	

			}


}
}
if($_SESSION['id'] > 0) {
	header ("Location:start.php"); 
} else {

?>
<TABLE border=0 cellSpacing=1 cellPadding=1 width="30%" 
align=center>
              <FORM method=post action="" name="giris">
              <TBODY>
              <tr><td><br /><center><DIV align=center><FONT size=3><STRONG>
			  <?php 
			  if(temizle(intval($_GET["hata"])) == 1 ) { echo "Güvenlik Kodu Yanlýþ Girildi"; }
			  if(temizle(intval($_GET["hata"])) == 2 ) { echo "Kullanýcý Adý Yada Þifre Yanlýþ"; }
			  if(temizle(intval($_GET["hata"])) == 3 ) { echo "Kayýt iþleminiz gerçekleþtirilmiþtir. &#350;ifreniz email adresinize yolland&#305;.
			  <br>G&ouml;nderilen email gereksiz kutusuna d&uuml;&#351;m&uuml;&#351; olabilir.
			  <br>Mail adresinizi kontrol ediniz.
			  "; }
			  if(temizle(intval($_GET["hata"])) == 4 ) { echo "Kayýt iþleminiz gerçekleþtirilmiþtir. &#350;ifreniz email adresinize yolland&#305;. <br> Site yönetimi  &uuml;yeli&#287;inizi onayland&#305;ktan sonra giri&#351; yapabileceksiniz.
<br>L&uuml;tfen &uuml;yelik onay maili gelmesini bekleyiniz.			  
			  "; }
			  ?>
              </STRONG></FONT></DIV></center></td></tr>
              <TR>
                <TD><IMG border=0 alt="" src="tema/img/spacer.gif" 
                  width=1 height=5></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><FONT size=4><STRONG>&Uuml;ye 
                Giriþi</STRONG></FONT></DIV></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><FONT size=1>B&uuml;y&uuml;k ve K&uuml;&ccedil;&uuml;k Harf Uyumuna 
                  Dikkat Ediniz.</FONT></DIV></TD></TR>
              <TR>
                <TD><STRONG>E-Mail Adresi:</STRONG><BR><INPUT 
                  style="WIDTH: 100%" class=Input size=15 name=email></TD></TR>
              <TR>
                <TD><FONT 
                  face=Verdana><STRONG>Þifre:</STRONG></FONT><BR><INPUT 
                  style="WIDTH: 100%" class=Input size=15 type=password 
                  name=password></TD></TR>
              <TR>
                <TD><FONT 
                  face=Verdana><STRONG>Güvenlik Kodu:</STRONG></FONT><br />
                  
  <label><img src="g_resim.php"></label> 
 
				 </label>
                <BR><INPUT name=kod class=Input 
                  style="WIDTH: 100%" size=15 maxlength="6"></TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
              </TR>
              <TR>
                <TD>
                  <DIV align=center><INPUT value=   Giriþ   type=submit></DIV></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><a href="?action=sifremi_unuttum">&#350;ifremi Unuttum</a></DIV></TD></TR></FORM></TABLE>
                  
                  <?php } ?>