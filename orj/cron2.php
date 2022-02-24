<?php
require_once("class/eb.vt.php");
require_once("class/tarih.php");
require_once("class/eb.myArray.php");
require_once("class/eb.formDogrula.php");
require_once("config.php");

$vt->sql("select * from vitrin_istek ")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
/* echo $veri->ilan_id ."<br>";
echo $veri->vitrin_bit ."<br>";
echo $tarih; */
if($veri->vitrin_bit == $tarih) {	
$vt->sql("update ilan_ticari set onay = 2 where id= '".$veri->ilan_id."'")->sor();
}
	
}


?>