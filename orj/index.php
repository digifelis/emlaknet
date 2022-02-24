<?php



ob_start();

session_start(); 







//dfghj

// $tema = "usaktema";

/// sabit synyflaryn eklenmesi



 require_once("class/eb.vt.php");



require_once("class/tarih.php");



require_once("class/eb.myArray.php");



require_once("class/eb.formDogrula.php");



require_once("config.php");



if($_GET["tema"]!= "") {

$tema = $_GET["tema"];
$_SESSION["tema"]=$tema;

} 
if($_SESSION["tema"]!= "") {

$tema = $_SESSION["tema"];


}


////////////////

















 include($tema."/header.php");



 



?>











    



    



    <?php 







 $sayfa   = false; 



@ $sayfa = trim(strip_tags(htmlspecialchars($_GET["action"])));



		



		 switch($sayfa){



default; require_once($tema.'/orta.php'); break;  







/////////////////



case 'giris';

require_once("sabit/giris.php");  break;



case 'yeni_emlakci';require_once("sabit/yeni_emlakci.php");  break;



case 'yeniuye';require_once("sabit/yeniuye.php");  break;



////////////////////



case 'arama';require_once("sabit/sonuc.php");  break;



case 'arama2';require_once("sabit/sonuc2.php");  break;



case 'detail';require_once("sabit/detail.php");  break;



case 'uyeol';require_once("sabit/uye_ol.php");  break;



case 'emlakci_liste';require_once("sabit/emlakci_liste.php");  break;



case 'duyuru';require_once("sabit/duyuru.php");  break;



case 'iletisim';require_once("sabit/iletisim.php");  break;



case 'ayrintili';require_once("sabit/ayrintili.php");  break;



case 'sifremi_unuttum';require_once("sabit/sifremi_unuttum.php");  break;



case 'onayla';require_once("sabit/onayla.php");  break;



case 'mutahit_liste';require_once("sabit/mutahit_liste.php");  break;



   }   









	?>    



    <?php 



 include($tema."/footer.php");
 $vt->sql("update ilan_ticari set onay=2 where onay=0")->sor();


 include("cron1.php");



 include("cron2.php");









?>  



  



















