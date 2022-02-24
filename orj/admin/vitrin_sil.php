<?php
$vt->sql("select * from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri1) { $ilan_id = $veri1->ilan_id; }

$vt->sql("delete from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 
 { 
  $vt->sql("update  ilan_ticari set onay='2' where id = '".$ilan_id."' ")->sor();
  
 echo "<center>VÝTRÝN ÝSTEÐÝ SÝLÝNDÝ.</center>"; } else {echo "<center> VÝTRÝN ÝSTEÐÝ SÝLÝNEMEDÝ LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; 
 }
?>