<?php
ob_start(); 
session_start();
/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
require_once("../config.php");

if($_POST["email"] !="") {
$vt->sql('select * from ayar   where isim = "'.temizle($_POST["email"]).'" and sifre="'.temizle($_POST["password"]).'" ');

 $vt->sor();
 
 if($vt->numRows()==1){
 $veriler = $vt->alHepsi();
foreach( $veriler as $veri )
{
//////  sessionlari baslat
/*
session_register("id1");
session_register("admin");
*/
$_SESSION['id1'] = $veri->id;
$_SESSION['admin'] = "admin";

 header ("Location:index.php"); 

} 
		} else { 
 header ("Location:giris.php");	

			}


}

if($_SESSION['id'] > 0) {
	header ("Location:index.php"); 
} else {
?>
<TABLE border=0 cellSpacing=1 cellPadding=1 width="30%" 
align=center>
              <FORM method=post action="" name="giris">
              <TBODY>
              <TR>
                <TD><IMG border=0 alt="" src="tema/img/spacer.gif" 
                  width=1 height=5></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><FONT size=4><STRONG>&Uuml;ye 
                Giri&#351;i</STRONG></FONT></DIV></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><FONT size=1>B&uuml;y&uuml;k ve K&uuml;&ccedil;&uuml;k Harf Uyumuna 
                  Dikkat Ediniz.</FONT></DIV></TD></TR>
              <TR>
                <TD><STRONG>E-Mail Adresi:</STRONG><BR><INPUT 
                  style="WIDTH: 100%" class=Input size=15 name=email></TD></TR>
              <TR>
                <TD><FONT 
                  face=Verdana><STRONG>&#350;ifre:</STRONG></FONT><BR><INPUT 
                  style="WIDTH: 100%" class=Input size=15 type=password 
                  name=password></TD></TR>
              <TR>
                <TD>
                  <DIV align=center><INPUT value=Giriþ type=submit></DIV></TD></TR>
              <TR>
                <TD>
                  <DIV align=center></DIV></TD></TR></FORM></TABLE>
                  
                  <?php } ?>