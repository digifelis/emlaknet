<?php

$vt->sql("delete from haberler where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 

 
 { echo "<center>HABER BAÞARILI BÝR ÞEKÝLDE SÝLÝNDÝ.</center>"; } else {echo "<center> HABER SÝLMEDE HATA OLUÞTU LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; }
?>