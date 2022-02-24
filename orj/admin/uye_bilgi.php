<?php
$vt->sql("select uye_tipi from uyeler where id = '".temizle($_GET["id"])."'")->sor();

if($vt->alTek() == 1) { require_once("uye_bilgileri2.php");   }
if($vt->alTek() == 2) { require_once("uye_bilgileri1.php");   }
if($vt->alTek() == 3) { require_once("uye_bilgileri2.php");   }
?>