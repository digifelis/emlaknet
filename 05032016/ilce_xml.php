<?php
ob_start();
session_start();
header("Cache-Control: no-cache");
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='iso-8859-9' standalone='yes'?>";
echo '<ilcelerxml etiketadi="ilce">';
/// sabit synyflaryn eklenmesi
require_once("class/eb.vt.php");
require_once("config.php");

ob_start();
@ $ilno = intval($_POST['ilno']);
if ($ilno)
{
  //Veritabanyndan Yle Göre Yllerin Çekilmesi
  $vt->sql("select * from ilce where sehirID = '".$ilno."' and ilceAdi != '' order by ilceAdi ASC")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  
  
   echo '<ilce ilceno="'.$veri->ilceID.'" ilceadi="'.$veri->ilceAdi.'" ilno="'.$ilno.'" />';
  }
}
echo '</ilcelerxml>';

session_register("arama_sehir");
$_SESSION['arama_sehir'] = $ilno;

?>