 <?php

    $gun = gmdate ("d");
    $ay = gmdate ("m");
    $saat = gmdate ("g");
    $yil = gmdate ("Y");
    $dakika = gmdate ("i");
    $saniye = gmdate ("s");
    $saat = gmdate ("H");
$tarih= $yil."-".$ay."-".$gun;
$zaman=  $saat.":".$dakika.":".$saniye;
$son_zaman= $tarih." ".$zaman;
?>
