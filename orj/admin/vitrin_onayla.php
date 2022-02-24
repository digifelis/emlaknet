<?php









$vt->sql("update vitrin_istek set onay = 'EVET' where id='".temizle($_GET["id"])."'")->sor();



 if($vt->affRows() > 0)

 

 { 



$vt->sql("select * from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();

$veriler = $vt->alHepsi();

foreach($veriler as $veri1) { $ilan_id = $veri1->ilan_id; }



$vt->sql("update ilan_ticari set onay = '4' where id='".$ilan_id."'")->sor();

$vitrin_bitis = date("Y-m-d",strtotime($tarih)+$veri1->vitrin_gun*86400);

$vt->sql('update vitrin_istek set vitrin_bas="'.$tarih.'" , vitrin_bit="'.$vitrin_bitis.'" where id="'.temizle($_GET["id"]).'" ')->sor();  

 echo "<center>VÝTRÝN ÝSTEÐÝ ONAYLANDI.</center>"; } else {echo "<center> VÝTRÝN ÝSTEÐÝ ONAYLANMADI LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; 

 }







?>