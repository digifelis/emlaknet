<?php

$vt->sql("delete from duyuru where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 { echo "<center>DUYURU BAÞARILI BÝR ÞEKÝLDE SÝLÝNDÝ.</center>"; } else {echo "<center> DUYURU SÝLMEDE HATA OLUÞTU LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; }
?>