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
$fax = $veri->fax;
$faxkod = $veri->kod2;
$cep = $veri->ceptel;
$cepkod = $veri->kod3;
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
if($telefon != "") {
	echo "Tel: ";
echo $kod." ".$telefon."&nbsp;-&nbsp;";
}
?>    
<?php 
if($fax != "") {
	echo "Fax: ";
echo $faxkod." ".$fax."&nbsp;-&nbsp;";
}
?>
<?php 
if($cep != "") {
	echo "Cep: ";
echo $cepkod." ".$cep."";
}
?>

    </font><br /></td>
  </tr>


</table>