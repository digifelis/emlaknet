<?php

$vt = new VT;

$gonderen_email = "admin@emlaknetturkiye.com";
$gonderen_email_parola = "1H3qULU46TNL";


$vt->baglan('emlaknet_emlak', 'emlaknet_root', 'albaraka');    // test veritabaný

$vt->sql("SET character_set_client='latin5'")->sor();

$vt->sql("SET character_set_results='latin5'")->sor();

$vt->sql("SET character_set_connection='latin5'")->sor();

 $vt->hataGoster('true');

 $vt->hataDurdur();

/// $vt->cacheZaman(30);

/// $vt->cacheLimit(5);
$tema = "tema8";
/* buradan sonrasinda degistirilecek bir yer yok */

$vt->sql('select * from ayar ')->sor();

$veriler = $vt->alHepsi();

foreach($veriler as $veri){

$admin_email = $veri->admin_email;

$site = $veri->site;

$title = $veri->title;

$anahtar_kelime = $veri->anahtar_kelime;

$aciklama = $veri->aciklama;

$yeni_ilan_sayisi = $veri->yeni_ilan_sayisi;
$vitrin_ilan_sayisi = $veri->vitrin_ilan_sayisi;


if(temizle($_GET["action"]) == "emlakci_liste" ) {
	$vt->sql('select * from sehir where sehirID="'.temizle($_GET["b"]).'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$title = $veri2->sehiradiUpper." EMLAKÇILARI ";   }	
}
if(temizle($_GET["action"]) == "mutahit_liste" ) {
	$vt->sql('select * from sehir where sehirID="'.temizle($_GET["b"]).'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$title = $veri2->sehiradiUpper." MÜTEAHHIT ve INSAAT FIRMALARI ";   }	
}

if(temizle($_GET["action"]) == "detail" ) {
	

$vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'" ')->sor();
 $veriler1 = $vt->alHepsi();
  foreach( $veriler1 as $veri1 )
{ 

$aciklama = $veri1->aciklama;


 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor();
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ $title = $veri12->adi." - "; $anahtar_kelime = $veri12->adi.",";  }

$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$title .= $veri2->sehiradiUpper." - "; $anahtar_kelime .= $veri2->sehiradiUpper.",";  }

$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	$title .= $veri3->ilceAdi." - ";  $anahtar_kelime .= $veri3->ilceAdi.","; }

$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'" and sehirID="'.$veri1->il.'"')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	$title .= $veri4->mahalleAdi;   $anahtar_kelime .= $veri4->mahalleAdi; }	
	
	$anahtar_kelime .= ",".$veri->anahtar_kelime;
	
	
} 

}



}









	   function temizle($str, $pre='', $post=''){

        $str = preg_replace('|<script>.*?</script>|ism', '', $str);

        $str = urldecode($str);

      ///  $str = htmlentities($str, ENT_QUOTES, 'utf-8');

        return $str;

    }



//7 sayilari ondalik hale getirme

function ondalik($sayi, $ayrac = ',')

{

    return strrev(join($ayrac, str_split(strrev($sayi), 3)));

}





/* sayfalama fonksiyonu */	

function PagePrint($thispage,$totalcontent,$perpage,$extent,$action){

if($totalcontent > $perpage) :

 $x = 2; // aktif sayfadan önceki/sonraki sayfa gösterim sayisi

 $lastP = ceil($totalcontent/$perpage);

 if($thispage > 1){

 

 $onceki = $thispage-1;

 

 $adres .= "<a href=\"?action=$action&sayfa=$onceki$extent\">«  </a>";

 

 }

 

 // sayfa 1'i yazdir

 if($thispage==1) $adres .= "<span class=\"sayfa\">[1]</span>";

 else $adres .= "<a href=\"?action=$action&sayfa=1$extent\">[1]</a>";

 // "..." veya direkt 2

 if($thispage-$x > 2) {

 $adres .= "...";

 $i = $thispage-$x;

 } else {

 $i = 2;

 }

 // +/- $x sayfalari yazdir

 for($i; $i<=$thispage+$x; $i++) {

 if($i==$thispage) $adres .= "<span class=\"sayfa\">[$i]</span>";

 else $adres .= "<a href=\"?action=$action&sayfa=$i$extent\">[$i]</a>";

 if($i==$lastP) break;

 }

 // "..." veya son sayfa

 if($thispage+$x < $lastP-1) {

$adres .= "...";

$adres .= "<a href=\"?action=$action&sayfa=$lastP$extent\">[$lastP]</a>";

 } elseif($thispage+$x == $lastP-1) {

 $adres .= "<a href=\"?action=$action&sayfa=$lastP$extent\">[$lastP]</a>";

 }

 

 if($thispage < $lastP){

 

 $sonraki = $thispage+1;

 

 $adres .= "<a href=\"?action=$action&sayfa=$sonraki$extent\">  » </a>";

 

 }

 endif;

 return $adres;

}





/* sayfalama fonksiyonu */	

function sayfala($thispage,$totalcontent,$perpage,$extent){

if($totalcontent > $perpage) :

 $x = 2; // aktif sayfadan önceki/sonraki sayfa gösterim sayisi

 $lastP = ceil($totalcontent/$perpage);

 if($thispage > 1){

 

 $onceki = $thispage-1;

 

 $adres .= "<a href=\"?sayfa=$onceki&$extent\">«  </a>";

 

 }

 

 // sayfa 1'i yazdir

 if($thispage==1) $adres .= "<span class=\"sayfa\">[1]</span>";

 else $adres .= "<a href=\"?sayfa=1&$extent\">[1]</a>";

 // "..." veya direkt 2

 if($thispage-$x > 2) {

 $adres .= "...";

 $i = $thispage-$x;

 } else {

 $i = 2;

 }

 // +/- $x sayfalari yazdir

 for($i; $i<=$thispage+$x; $i++) {

 if($i==$thispage) $adres .= "<span class=\"sayfa\">[$i]</span>";

 else $adres .= "<a href=\"?sayfa=$i&$extent\">[$i]</a>";

 if($i==$lastP) break;

 }

 // "..." veya son sayfa

 if($thispage+$x < $lastP-1) {

$adres .= "...";

$adres .= "<a href=\"?sayfa=$lastP&$extent\">[$lastP]</a>";

 } elseif($thispage+$x == $lastP-1) {

 $adres .= "<a href=\"?sayfa=$lastP&$extent\">[$lastP]</a>";

 }

 

 if($thispage < $lastP){

 

 $sonraki = $thispage+1;

 

 $adres .= "<a href=\"?sayfa=$sonraki&$extent\">  » </a>";

 

 }

 endif;

 return $adres;

}



function permayap($string) {



$string = strtolower($string);

$string = str_replace("I", "i", $string); // G

$string = str_replace("G", "g", $string); // G

$string = str_replace("I", "i", $string); // G

$string = str_replace("ü", "u", $string); // G

$string = str_replace("Ü", "u", $string); // G



$string = str_replace("s", "s", $string); // G

$string = str_replace("S", "s", $string); // G

$string = str_replace("ö", "o", $string); // G

$string = str_replace("Ö", "o", $string); // G

$string = str_replace("ç", "c", $string); // G

$string = str_replace("Ç", "c", $string); // G





$string = str_replace(" ", "", $string); //bosluk



/* UTF-8 karakterleri degistir */

 $string = str_replace("\xc3\xa7", "\x63", $string); // ç

$string = str_replace("\xc3\x87", "\x43", $string); // Ç

$string = str_replace("\xc4\x9f", "\x67", $string); // g

$string = str_replace("\xc4\x9e", "\x47", $string); // G





$string = str_replace("\xc4\xb1", "\x69", $string); // i

$string = str_replace("\xc4\xb0", "\x69", $string); // I

$string = str_replace("\xc3\xb6", "\x6f", $string); // ö

$string = str_replace("\xc3\x96", "\x4f", $string); // Ö

$string = str_replace("\xc3\xbc", "\x75", $string); // ü

$string = str_replace("\xc3\x9c", "\x55", $string); // Ü

$string = str_replace("\xc5\x9f", "\x73", $string); // s

$string = str_replace("\xc5\x9e", "\x53", $string); // S

$string = str_replace("\xc3\x82", "\x41", $string); //sapkali A

$string = str_replace("\xc3\xa2", "\x61", $string); //sapkali a

$string = str_replace("\xc3\xae", "\x69", $string); //sapkali i

$string = str_replace("\xc3\x8e", "\x49", $string); //sapkali I

$string = str_replace("\xc3\xbb", "\x75", $string); //sapkali u

$string = str_replace("\xc3\x9b", "\x55", $string); //sapkali U







$string = str_replace("\xe7", "\x63", $string); // ç

$string = str_replace("\xc7", "\x43", $string); // Ç

$string = str_replace("\xf0", "\x67", $string); // g

$string = str_replace("\xd0", "\x47", $string); // G

$string = str_replace("\xfd", "\x69", $string); // i

$string = str_replace("\xdd", "\x69", $string); // I

$string = str_replace("\xf6", "\x6f", $string); // ö

$string = str_replace("\xd6", "\x4f", $string); // Ö

$string = str_replace("\xfe", "\x73", $string); // s

$string = str_replace("\xde", "\x53", $string); // S

$string = str_replace("\xe2", "\x61", $string); //sapkali a

$string = str_replace("\xc2", "\x41", $string); //sapkali A 

$string = str_replace("\xee", "\x69", $string); //sapkali i

$string = str_replace("\xce", "\x49", $string); //sapkali I

$string = str_replace("\xfb", "\x75", $string); //sapkali u

$string = str_replace("\xdd", "\x55", $string); //sapkali U

$string = str_replace(" ", "", $string); //bosluk 
$string = str_replace("/", "-", $string); //bosluk 


return $string;









}  	







function resim_listele($col,$pad,$spac,$data) { 

    $rtn.='<table border="0" cellspacing="'.$spac.'" cellpadding="'.$pad.'" width="100%"> <tr>'; 

    $count = 0;  

    if (count($data)>0) { 

    for ($i = 0; $i <= count($data); $i++) {     

    $rtn.= '<td valign="top">'.$data[$i]; 

    if ($space>0) { 

    $rtn.= "";} 

    $space++; 

    if ($count<1) { 

    $rtn.= "</td>"; 

    $dum = 1; 

    } 



    $count++; 

    if ($count==$col) { 

    $rtn.= "</td></tr><tr>"; 

    $count = 0; 

    $dum = 0; 

    } 

    } 

    if ($dum == 1) { 

    $rtn.= "</tr></table>"; 

    } elseif ($dum == 0) { 

    $rtn.= "</td></tr></table>";}     

    return $rtn; } 

} 

	?>
