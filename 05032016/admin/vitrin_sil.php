<?php
$vt->sql("select * from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri1) { $ilan_id = $veri1->ilan_id; }

$vt->sql("delete from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 
 { 
  $vt->sql("update  ilan_ticari set onay='2' where id = '".$ilan_id."' ")->sor();
  
 echo "<center>V�TR�N �STE�� S�L�ND�.</center>"; } else {echo "<center> V�TR�N �STE�� S�L�NEMED� L�TFEN TEKRAR DENEY�N�Z!!!! </center> "; 
 }
?>