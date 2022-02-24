<?php
ob_start(); 
session_start();

 //if($_SESSION["admin"] != "" ) {
if($_SESSION['id1'] == "") {

?>
<TABLE border=0 cellSpacing=1 cellPadding=1 width="30%" 
align=center>
              <FORM method=post action="giris.php" name="giris">
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
            
<?php 
} else {
/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
require_once("../config.php");

////////////////
include("header.php");
?>

  
    
    
    <?php 
$sayfa   = false;
@ $sayfa = trim(strip_tags(htmlspecialchars($_GET["action"])));
		
		 switch($sayfa){
default; require_once('orta.php'); break;  

/////////////////
case 'uye';require_once("uye_ust.php");  break;
case 'ilan';require_once("ilan_ust.php");  break;
case 'haber';require_once("haber_ust.php");  break;
case 'duyuru';require_once("duyuru_ust.php");  break;
case 'vitrin';require_once("vitrin_ust.php");  break;
case 'mesajlar';require_once("mesajlar_ust.php");  break;
case 'ayar';require_once("ayar_ust.php");  break;
case 'reklamlar';require_once("reklam_ust.php");  break;



////////////////
   }  
	

	?>
    
    
    
     
      
      
      
    <?php 
include("footer.php");
}
?>  
      
      
      
      
      
 