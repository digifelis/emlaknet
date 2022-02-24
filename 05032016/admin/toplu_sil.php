<?php
ob_start(); 
session_start();
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
//require_once("../config.php");

$vt->sql("select * from ilan_ticari where onay=3 limit 1000")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {

         $silenecek =  $veri->id;
         $vt->sql("delete from ilan_ticari where id = '".$silenecek."' ")->sor();
               if($vt->affRows()>0) { 
 echo "ÝLAN BAÞARILI BÝR ÞEKÝLDE SÝLÝNDÝ"; 
  $vt->sql('select * from ilan_foto where ilan_id="'.$silenecek.'"  ')->sor();
 $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ 
$dosyaAdi 	= substr($veri->foto_adi, 0, strrpos($veri->foto_adi, '.'));
$uzanti 	= substr($veri->foto_adi, strrpos($veri->foto_adi, '.'));

@unlink("../resimler/".$veri->foto_adi."");

@unlink("../resimler/".$dosyaAdi."_w85_h64".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w100_h75".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w510_h400".$uzanti."");


$vt->sql("delete from ilan_foto where ilan_id = '".$silenecek."' ")->sor();
}
 
 } 






}

?>