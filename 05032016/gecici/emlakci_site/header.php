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
<html>
<head>
<link href="emlakci_menu.css" rel="stylesheet" type="text/css" />
<link href="css/emlakci_genel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title><?php echo $sirket; ?>&nbsp;<?php echo $sehir; ?></title>
</head>
<body>
<div class="tamami">
  <div class="logo">
  <div class="logom"> 
<table width="100%" border="1" id="table1">
	<tr>
		<td width="20%">
  <?php 
if($firma_logo != '') {
	echo '
<img src="http://'.$site.'/resimler/'.$firma_logo.'"  width="190" height="140" />
  ';
} else {	echo '
<img src="http://'.$site.'/usaktema/emlakturkiye_logo.jpg"  width="190" height="140" />

  '; }
  ?>
		
		</td>
		<td  bgcolor="#EBEBEB"width="80%">
<?php
$vt->sql("select * from uyeler where id= '".$_SESSION["emlakci"]."'")->sor();
$veriler = $vt->alHepsi();
foreach ($veriler as $veri) {
	$sirket = $veri->sirket;
	$adres = $veri->adres;
$ilce = $veri->ilce;
$isim_soyad = $veri->isim_soyad;
$telefon = $veri->tel1;
$kod = $veri->kod1;

$vt->sql("select * from sehir where sehirID='".$veri->il."'")->sor();
$veriler1 = $vt->alHepsi();
foreach($veriler1 as $veri1) { $sehir = $veri1->sehiradiUpper; }

$vt->sql("select * from logolar where user_id='".$_SESSION["emlakci"]."'")->sor();
$veriler2 = $vt->alHepsi();
foreach($veriler2 as $veri2) { $kroki = $veri2->kroki; }



}
?>

<table width="100%" border="0" align="center">
  <tr>
  <td align="center"><b><font size="6"><?php echo $sirket; ?></b></font><br>
    <b><font size="5"><?php echo $isim_soyad; ?></b></font>
    </td>
  </tr>
  <tr>
<td align="center"><font size="4"><?php echo $adres; ?></font><br />
    <font size="4"><?php echo $ilce; ?>&nbsp;/&nbsp;<?php echo $sehir; ?></font><br /></td>
  </tr>
  <tr>
    <td align="center">
    <font size="4">
<?php 
if($veri->tel1 != "") {
	echo "Tel: ";
echo $veri->kod1." ".$veri->tel1."&nbsp;-&nbsp;";
}
?>    
<?php 
if($veri->fax != "") {
	echo "Fax: ";
echo $veri->kod2." ".$veri->fax."&nbsp;-&nbsp;";
}
?>
<?php 
if($veri->ceptel != "") {
	echo "Cep: ";
echo $veri->kod3." ".$veri->ceptel."";
}
?>

    </font><br /></td>
  </tr>


</table>
		
		</td>
	</tr>
	<tr>
		<td colspan="2">
  <div class="menu">
  
 <ul class="glossymenu">
	<li <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> ><a href="index.php"><b>Ana Sayfa</b></a></li>
	<li <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?>><a href="index.php?action=arama&amp;grup=1&amp;liste=1"><b>Konut &#304;lanlar&#305;</b></a></li>
	<li <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?>><a href="index.php?action=arama&amp;grup=2&amp;liste=1"><b>&#304;&#351;yeri &#304;lanlar&#305;</b></a></li>	
	<li <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?>><a href="index.php?action=arama&amp;grup=3&amp;liste=1"><b>Arsa &#304;lanlar&#305;</b></a></li>	
	<li <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> ><a href="index.php?action=iletisim"><b>&#304;leti&#351;im</b></a></li>	
		
</ul>
 
  
  
  </div>		
		</td>
	</tr>
</table>

  <div class="ana">
    
  <div class="sag_blok">