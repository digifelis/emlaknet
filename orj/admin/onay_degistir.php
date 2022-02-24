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


if($_POST["RadioGroup1"] == 1) { $bloke_durum=$_POST["bloke"];  } else { $bloke_durum = ""; }


$vt->sql("update ilan_ticari set onay= '".$_POST["RadioGroup1"]."' , bloke_sebebi='". $bloke_durum ."'  where id = '".$_POST["ilan_id"]."'")->sor();


if($vt->affRows() > 0 ) { 

$durum="";

if($_POST["RadioGroup1"] == 0) { $durum="kontrol aşamasında";  }
if($_POST["RadioGroup1"] == 1) { $durum="blokeli";  }
if($_POST["RadioGroup1"] == 2) { $durum="aktif";  }
if($_POST["RadioGroup1"] == 3) { $durum="süresi dolmuş";  }
if($_POST["RadioGroup1"] == 4) { $durum="vitrin";  }

echo $_POST["ilan_id"]." numaralı ilan ".$durum." olarak değiştirildi. <br>İşlem Gerçekleştirildi.";



} else { echo "!!! Veri Değişmedi !!!"; }
/// echo "<br>". $_POST["RadioGroup1"]."<br>".$_POST["ilan_id"];
?>