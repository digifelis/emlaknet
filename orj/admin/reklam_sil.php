<?php
$vt->sql("select * from reklam where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
$resim_vt = $veri->resim;
@unlink("../".$resim_vt."");
  }
  
  
$vt->sql("delete from reklam where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 

 
 { echo "<center>REKLAM BAÞARILI BÝR ÞEKÝLDE SÝLÝNDÝ.</center>";
 header ("Location:index.php?action=reklamlar&subaction=reklam_liste");
 
 
 } else {echo "<center> REKLAM SÝLMEDE HATA OLUÞTU LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; }
?>