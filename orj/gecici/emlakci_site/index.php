<?php
ob_start(); 
session_start();
/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
require_once("../config.php");

/// echo $_SERVER['HTTP_HOST']."<br>";





list($emlakci_isim,$site_isim,$site_uzanti)=split("[.]", $_SERVER['HTTP_HOST']);
/// echo "$emlakci_isim  $site_isim  $site_uzanti";
 
if(temizle($_GET['emlakci_isim']) != "" ) { $emlakci_isim =  temizle($_GET['emlakci_isim']) ; }

////////////////
$vt->sql("select id,temiz_ad from uyeler where temiz_ad = '".temizle($emlakci_isim)."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
session_register("emlakci");
$_SESSION['emlakci'] = $veri->id;

}
/* session_register("emlakci");
$_SESSION['emlakci'] =7; */

$vt->sql("select * from uyeler where id= '".$_SESSION["emlakci"]."'")->sor();
$veriler = $vt->alHepsi();
foreach ($veriler as $veri) {
	$sirket = $veri->sirket;
}

$vt->sql("select * from logolar where user_id='".$_SESSION["emlakci"]."'")->sor();
$veriler2 = $vt->alHepsi();
foreach($veriler2 as $veri2) { $sirket_logo = $veri2->sirket_logo; }

$vt->sql("select * from logolar where user_id='".$_SESSION["emlakci"]."'")->sor();
$veriler2 = $vt->alHepsi();
foreach($veriler2 as $veri2) { $firma_logo = $veri2->firma_logo; }

include("header.php");

?>

  
    
    
    <?php 
$sayfa   = false;
@ $sayfa = trim(strip_tags(htmlspecialchars($_GET["action"])));
		
		 switch($sayfa){
default; require_once('orta.php'); break;  

/////////////////
case 'arama';require_once("arama.php");  break;
case 'iletisim';require_once("iletisim.php");  break;
case 'detail';require_once("detail.php");  break;
//////////////

   }  
	

	?>
    
    
    
     
      
      
      
    <?php 
include("footer.php");
?>  
      
      
      
      
      
 
