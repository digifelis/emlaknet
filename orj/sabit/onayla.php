<?php

$vt->sql('select id,hash from uyeler where hash= "'.temizle($_GET["hash"]).'" ')->sor();
 $veriler = $vt->alHepsi();  foreach($veriler as $veri) {	  $uye_no = $veri->id; }
if($uye_no > 0 ){
$vt->sql('update uyeler set onay=0 where id= "'.$uye_no.'" ')->sor();
echo "<center><h1>�yelik aktive Edildi</h1></center>";
} else {echo "<center><h1>�yelik Aktive Edilemedi</h1></center>";}
?>