<?php ob_start();?>
<?php
header("Content-type: text/xml\n\n");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\">";
 echo '
<channel> 
<title>EMLAKNET TÜRKİYE</title> 
<description>emlaknet türkiye rss beslemesi. emlaknet,istanbul satılık daire,ankara satılık daire,izmir satılık daire,istanbul satılık arsa,ankara satılık arsa,izmir satılık arsa,istanbul kiralık daire , izmir kiralık daire,ankara kiralık daire</description> 
<link>http://www.emlaknetturkiye.com</link>
<language>tr</language> 
'; 
require_once("class/eb.vt.php");
require_once("class/tarih.php");
require_once("config.php");
$vt->sql("SET character_set_client='utf8'")->sor();

$vt->sql("SET character_set_results='utf8'")->sor();

$vt->sql("SET character_set_connection='utf8'")->sor();


$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id  DESC limit 0,20 ")->sor();


$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi." ".$ilan_il."  ".$ilan_ilce."  ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $table1 = '';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "") {

$table1 .= '<img name="'.$ilan_adres.'" src="http://www.emlaknetturkiye.com/resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 />';
   } else { 
$table1 .= ' <img border=0 alt="'.$ilan_basligi.'" src="http://www.emlaknetturkiye.com/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; }	
										}

if($uye_tipi == 2 ) {
 $table1 .= '<img border=0 alt="'.$ilan_basligi.'" src="http://www.emlaknetturkiye.com/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; 	
					}

 }

else 

{ $table1 .= ' <IMG border=0 alt="'.$ilan_basligi.'" src="http://www.emlaknetturkiye.com/thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75">';

}


$link = "http://www.emlaknetturkiye.com/detail_".$veri->id."_".$ilan_adres."";



echo " 
<item> 
<title>$ilan_basligi</title> 
<description><![CDATA[$table1]]></description> 
<link>$link</link> 
</item> 
"; 


 }





 


echo " 
</channel> 
</rss>"; 


?>