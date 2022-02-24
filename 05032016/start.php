<?php

ob_start(); 

session_start();



/// sabit sýnýflarýn eklenmesi

require_once("class/eb.vt.php");

require_once("class/tarih.php");

require_once("class/eb.myArray.php");

require_once("class/eb.formDogrula.php");

require_once('class/kgUploader.class.php');

require_once("config.php");



if($_GET["tema"]!= "") {

$tema = $_GET["tema"];
$_SESSION["tema"]=$tema;

} 
if($_SESSION["tema"]!= "") {

$tema = $_SESSION["tema"];


}


include($tema."/header.php");

if($_SESSION['id'] > 0) {

?>

<script>

	$(function() {

		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });

	});

	</script>



<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="155" align="left" valign="top"><?php 

	if($_SESSION["uye_tipi"]==2) {

	include("uye/uye_menu.php"); 

	}

		if($_SESSION["uye_tipi"]==1 or $_SESSION["uye_tipi"]==3) {

	include("bayi/uye_menu.php"); 

	}

	?></td>

    <td width="10">&nbsp;</td>

    <td width="765" valign="top" align="left"><?php 

$sayfa   = false;

@ $sayfa = trim(strip_tags(htmlspecialchars($_GET["action"])));

if($_SESSION["uye_tipi"] == 2 ) {		

		 switch($sayfa){

default; require_once('uye/ilan_takip.php'); break;  



/////////////////

case 'ilan_kurallari';require_once("sabit/ilan_kurallari.php");  break;

case 'ana_form';require_once("uye/ana_form.php");  break;



case 'benimilanlar';require_once("uye/benimilanlar.php");  break;

case 'uyebilgileri';require_once("uye/uye_bilgileri.php");  break;

case 'arama_kriter';require_once("uye/arama_kriter.php");  break;

case 'ilan_takip';require_once("uye/ilan_takip.php");  break;

case 'cikis';require_once("cikis.php");  break;

/////////////77

case 'sehirler';require_once("uye/sehirler.php");  break;

case 'ilce';require_once("uye/ilceler.php");  break;

case 'koylar';require_once("uye/koylar.php");  break;



case 'form1';require_once("uye/form1.php");  break;

case 'form2';require_once("uye/form2.php");  break;

case 'form3';require_once("uye/form3.php");  break;

////////////////////

case 'edit';require_once("uye/edit.php");  break;

case 'pictures';require_once("uye/pictures.php");  break;

case 'ilan_sil';require_once("uye/ilan_sil.php");  break;

case 'topilan';require_once("uye/topilan.php");  break;

case 'uzat';require_once("uye/uzat.php");  break;

   }  

	

}

///////////// bayi girerse 

if($_SESSION["uye_tipi"] == 1 or $_SESSION["uye_tipi"] == 3  ) {		

		 switch($sayfa){

default; require_once('bayi/ilan_takip.php'); break;  



/////////////////

case 'ilan_kurallari';require_once("sabit/ilan_kurallari.php");  break;

case 'ana_form';require_once("bayi/ana_form.php");  break;

case 'vitrin';require_once("bayi/vitrin_yap.php");  break;



case 'goc';require_once("sabit/goc.php");  break;





case 'benimilanlar';require_once("bayi/benimilanlar.php");  break;

case 'uyebilgileri';require_once("bayi/uye_bilgileri.php");  break;

case 'arama_kriter';require_once("bayi/arama_kriter.php");  break;

case 'ilan_takip';require_once("bayi/ilan_takip.php");  break;

case 'cikis';require_once("cikis.php");  break;

/////////////77

case 'sehirler';require_once("bayi/sehirler.php");  break;

case 'ilce';require_once("bayi/ilceler.php");  break;

case 'koylar';require_once("bayi/koylar.php");  break;



case 'form1';require_once("bayi/form1.php");  break;

case 'form2';require_once("bayi/form2.php");  break;

case 'form3';require_once("bayi/form3.php");  break;

////////////////////

case 'edit';require_once("bayi/edit.php");  break;

case 'pictures';require_once("bayi/pictures.php");  break;

case 'ilan_sil';require_once("bayi/ilan_sil.php");  break;

case 'topilan';require_once("bayi/topilan.php");  break;

////////////////

case 'haberler';require_once("bayi/haberler.php");  break;

case 'iletisim';require_once("bayi/iletisim.php");  break;

case 'firma_logo';require_once("bayi/firma_logo.php");  break;

case 'sirket_logo';require_once("bayi/sirket_logo.php");  break;

case 'kroki';require_once("bayi/kroki.php");  break;

case 'eleman_listesi';require_once("bayi/eleman_listesi.php");  break;

case 'eleman_ekle';require_once("bayi/eleman_ekle.php");  break;



case 'uzat';require_once("bayi/uzat.php");  break;

   }  

	

}

	?></td>

  </tr>

</table>





<?php 

} else {

header ("Location:index.php?action=giris"); 	

}

include($tema."/footer.php");

?>