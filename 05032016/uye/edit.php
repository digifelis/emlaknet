 <?php 
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["oid"]).'" and uye_id="'.$_SESSION["id"].'"   ')->sor();
  if($vt->numRows() == 0) {echo "<h3>Sayfada Hata Olustu . Hata Kodu E1100.<br>Hata devam ederse L�tfen Site Y�neticisine Bildiriniz.</h3>";};
 $veriler1 = $vt->alHepsi();


 foreach( $veriler1 as $veri1 )
{ 

if($veri1->ilan_grup == 1) { require_once("uye/edit_form1.php");};
if($veri1->ilan_grup == 2) { require_once("uye/edit_form2.php");};
if($veri1->ilan_grup == 3) { require_once("uye/edit_form3.php");};
}
 ?>