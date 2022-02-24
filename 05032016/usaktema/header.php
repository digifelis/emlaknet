<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title><?php echo $title; 
?></title>
<meta name="description" content="<?php echo $aciklama; ?>" /> 
<meta name="keywords" content="<?php echo $anahtar_kelime; ?>" /> 
<meta name="google-site-verification" content="5XXQyTlShZ3hzhYIC5x5uH3dz9lUWUPQXj-5eOAA_EU" />
<LINK type="text/css" rel="stylesheet"  href="tema/css/emlak.css">
<LINK type="text/css" rel="stylesheet" href="usaktema/css/tema1.css">
<link type="text/css" rel="stylesheet" href="usaktema/menu_img/style.css" />


<script type="text/javascript" src="yalniz_sayi.js"></script> 
<script type="text/javascript" src="getirici.js"></script>

	<link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css">
	<script src="http://jqueryui.com/jquery-1.5.1.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.core.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.widget.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="http://jqueryui.com/demos/demos.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });
	});
	</script>



<style type="text/css">
body{margin-top:0;}
.stil1{font-size:14px;}
.stil2{font-size:14px;font-family:"Times New Roman", Times, serif;color:#000;}
.stil3{color:#009;}
.stil8{font-size:12px;}
.stil9{color:#006;}
</style>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11140047-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body>


<div id="tamami">

<table width="100%" border="0">
  <tr>
    <td width="20%" align="left" valign="top" nowrap="nowrap"><img src="usaktema/emlakturkiye_logo.jpg"  /></td>
    <td width="27%" align="left" valign="top" nowrap="nowrap">
	<?php 
	$vt->sql('select * from reklam where yer=1 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(10);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td width="31%" align="left" valign="top" nowrap="nowrap"><?php $vt->sql('select * from reklam where yer=2 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td width="22%" align="left" valign="top" nowrap="nowrap"><?php $vt->sql('select * from reklam where yer=3 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
  </tr>
</table>

<div id="menu">
  
	
			<div id="menucase">
			
	<div id="stylefour">

<ul>
	<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> >Ana Sayfa</a></li>
	<li><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?> >Konut İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?> >İşyeri İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?> >Arsa/Tarla İlanları</a></li>
    <li><a href="index.php?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlakçı Listesi</a></li>
     <li><a href="index.php?action=mutahit_liste" <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="current"';} ?> >Mütahit Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	<li><a href="?action=giris" title="" <?php if(temizle($_GET["action"]) == "giris") { echo 'class="current"'; } ?> >Üye Girişi</a></li>
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >Üye Ol</a></li> 
    <li><a href="index.php?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >İletişim</a></li> 
	</ul>





<!--

	<ul>
	<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> >Ana Sayfa</a></li>
	<li><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?> >Konut İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?> >İşyeri İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?> >Arsa/Tarla İlanları</a></li>
    <li><a href="index.php?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlakçı Listesi</a></li>
     <li><a href="index.php?action=mutahit_liste" <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="current"';} ?> >Mütahit Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >Üye Ol</a></li> 
    <li><a href="index.php?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >İletişim</a></li> 
	</ul>
-->
	</div>

  </div>

    
  </div>



<div id="ana">