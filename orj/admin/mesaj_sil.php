<?php
$vt->sql("select * from mesajlar where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri1) { $ilan_id = $veri1->ilan_id; }

$vt->sql("delete from mesajlar where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 
 { 
  
  
 echo "<center>MESAJ SILINDI.</center>"; } else {echo "<center> MESAJ SILINEMEDI LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; 
 }
?>