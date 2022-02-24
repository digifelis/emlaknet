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
<TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=1 cellSpacing=2 cellPadding=2 width="950" align=center>
        <TBODY>
        
        <TR>
<td valign="top" width="214"><?php include("hizli_arama2.php"); ?></td>        
          <TD valign="top" width="720">
          
<table width="100%" border="0" align="center">
  <tr>
	<td width="60%" align="center" valign="top" rowspan="7">
	<?php 
	if( ($kroki == '') and ($firma_logo == '') )
	
	{ echo ' <img src="http://'.$site.'/usaktema/emlakturkiye_logo.jpg" width="300" height="225" />'; }

    elseif(	($kroki == '') and ($firma_logo != '') )
	
    { echo ' <img src="http://'.$site.'/resimler/'.$firma_logo.'"  width="400" height="300" /> '; }

    else

    { echo ' <img src="http://'.$site.'/resimler/'.$kroki.'"  width="700" height="525" /> '; }
	
	?>
    </td>    
  </tr>
 
</table>
</TD>
</TR>
</TBODY>
</TABLE>