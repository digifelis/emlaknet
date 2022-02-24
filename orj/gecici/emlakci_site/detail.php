<style type="text/css">
<!--
#secili {
	font-weight: bold;
	color: #F00;
	font-size: 14px;
}


-->
</style>
<?php 

$vt->sql("select * from ilan_ticari where id= '".temizle($_GET["id"])."'")->sor();
 if($vt->numRows() == 0) {
	 echo "<h3>Uyari ! Uyari Kodu EMD0100.<br>
	 Belirttiginiz Ilan Bulunamamistir.<br>
	 
	 Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";
	 
	 } else {
 
$veriler = $vt->alHepsi();
foreach($veriler as $veri){
	
if($veri->ilan_grup == 1 ) { include("detail1.php"); } 
if($veri->ilan_grup == 2 ) { include("detail2.php"); } 
if($veri->ilan_grup == 3 ) { include("detail3.php"); } 
}
	 }
?>