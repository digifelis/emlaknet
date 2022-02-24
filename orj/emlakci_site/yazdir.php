<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
ob_start("ob_gzhandler"); 
}
else {
ob_start(); 
}

 
session_start(); 
/// sabit synyflaryn eklenmesi
 require_once("class/eb.vt.php");
require_once("class/tarih.php");
require_once("class/eb.myArray.php");
require_once("class/eb.formDogrula.php");
require_once("config.php");

////////////////
?>

<html><head>

<style type="text/css">
<!--
#secili {
	font-weight: bold;
	color: #F00;
	font-size: 14px;
}


-->
</style>

</head>
<body topmargin=0 leftmargin=0 onLoad="JavaScript:window.print()"> 

<table width="100%" border="0">
  <tr>
   
    <td width="72%" align="left" valign="top"><?php 
$vt->sql("select * from ilan_ticari where id= '".temizle($_GET["id"])."'")->sor();
 if($vt->numRows() == 0) {
	 echo "<h3>Uyari ! Uyari Kodu D0100.<br>
	 Belirttiginiz Ilan Bulunamamistir.<br>
	 
	 Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";
	 
	 } else {
 
$veriler = $vt->alHepsi();
foreach($veriler as $veri){
	
if($veri->ilan_grup == 1 ) { include("sabit/yazdir_detail1.php"); } 
if($veri->ilan_grup == 2 ) { include("sabit/yazdir_detail2.php"); } 
if($veri->ilan_grup == 3 ) { include("sabit/yazdir_detail3.php"); } 
}
	 }
?></td>
  </tr>

</table>

</body>
</html>

