<?php
ob_start();
session_start();
        header("Cache-Control: no-cache");
        header('Content-Type: text/xml');
        echo "<?xml version='1.0' encoding='iso-8859-9' standalone='yes'?>";
        echo '<koylerxml etiketadi="koy">';
/// sabit synyflaryn eklenmesi
require_once("class/eb.vt.php");
require_once("config.php");
        //POST Metoduyla Gelen Yl Numarasynyn Alymy
        @ $ilceno = intval($_POST['ilceno']);

        if ($ilceno)
        {
        //Veritabanyndan Yle G�re Yllerin �ekilmesi
 $vt->sql("SELECT * FROM `mahalle` where ilceID='".$ilceno."' and sehirID = '".$_SESSION["arama_sehir"]."' and mahalleAdi != '' order by mahalleAdi  ASC")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  
        echo '<koy koyno="'.$veri->mahalleID.'" koyadi="'.$veri->mahalleAdi .'" />'; //k�y�n numarasy yerine isminin �ikmasyny istiyorsak  $koyno yerine $koyadi olarak se�in =======>>>>> '<koy koyno="'.$koyno.'" koyadi="'.$koyadi.'" />'
  }
        }
        echo '</koylerxml>';
     
?>