<?php
$vt->sql("select * from uyeler where id= '".$_SESSION["emlakci"]."'")->sor();
$veriler = $vt->alHepsi();
foreach ($veriler as $veri) {
	$sirket = $veri->sirket;
$vt->sql("select * from sehir where sehirID='".$veri->il."'")->sor();
$veriler1 = $vt->alHepsi();
foreach($veriler1 as $veri1) { $sehir = $veri1->sehiradiUpper; }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"  />
<title><?php echo $sirket; ?>&nbsp;<?php echo $sehir; ?></title>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.3.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.3.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.3.css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/stil.css" />

<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.74.js"></script>
<script type="text/javascript" src="js/vitrin.js"></script>

<script type="text/javascript">  

	$(document).ready(function(){
		
		$(".sonilanrow").mouseover(function(){
			$(this).css({ color:"red" });
		});
		
		$(".sonilanrow").mouseout(function(){
			$(this).css({ color:"black" });
		});
		
	});
		
</script>

<script type="text/javascript">
	$(document).ready(function() {

		$("a#foto").fancybox();
	});
</script>

<script type="text/javascript" src="../yalniz_sayi.js"></script> 
<script type="text/javascript" src="../getirici.js"></script>

</head>

<body >

<div id="sayfa">
	<div id="ust">
    
      <?php 
if($firma_logo != '') {
	echo '
<img src="http://'.$site.'/resimler/'.$firma_logo.'" hspace="5"  />
  ';
} else {	echo '
<img src="http://emlaknetturkiye.com/tema7/yeni_logo.png" hspace="5"  />


  '; }
  ?>
    
    
    </div>
    <div id="menu"><div class="menuitem"><a href="index.php" title="anasayfa" >ANASAYFA</a></div>

<div class="menuitem"><a href="index.php?action=arama&grup=1&liste=1" title="konut ilanları" >KONUT İLANLARI</a></div>
<div class="menuitem"><a href="index.php?action=arama&grup=2&liste=1" title="işyeri ilanları" >İŞYERİ İLANLARI</a></div>
<div class="menuitem"><a href="index.php?action=arama&grup=3&liste=1" title="arsa ilanları" >ARSA İLANLARI</a></div>

<!-- <div class="menuitem"><a href="index.php?action=duyuru" title="Duyurular" >DUYURULAR</a></div> -->
<div class="menuitem"><a href="index.php?action=iletisim" title="iletişim" >İLETİŞİM</a></div></div>
   
 
 