<?php
ob_start();
session_start();
/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
require_once("../config.php");

////////////////
if($_SESSION["id"] != '') {
if(temizle($_GET["id"]) != '') {
$vt->sql("select * from ilan_takip where ilan_id='".temizle($_GET["id"])."' and kullanici_id = '".$_SESSION["id"]."'   ")->sor();

if($vt->numRows() == 0) 
{
$vt->sql("insert  into ilan_takip (id,ilan_id,kullanici_id) values (NULL,'".temizle($_GET["id"])."','".$_SESSION["id"]."')  ")->sor();
echo "<CENTER>ÝLAN TAKÝP LÝSTENÝZ EKLENMÝÞTÝR</CENTER>";	
} else { echo "<CENTER>ÝLAN DAHA ÖNCEDEN EKLENDÝÐÝ TESPÝT EDÝLDÝÐÝNDEN .<BR> EKLEME ÝÞLEMÝ GERÇEKLEÞTÝRÝLMEDÝ.</CENTER>"; }

}
	
} else { echo "<center>ÜYE GÝRÝÞÝ YAPILMADAN BU ÖZELLÝK KULLANILAMAZ</center>"; }

?>