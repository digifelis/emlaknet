<?php
	if (isset($_POST["PHPSESSID"])) {
		session_id($_POST["PHPSESSID"]);
	} else if (isset($_GET["PHPSESSID"])) {
		session_id($_GET["PHPSESSID"]);
	}

	session_start();

/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/eb.myArray.php");
require_once("../config.php");
////////////////
// Check post_max_size (http://us3.php.net/manual/en/features.file-upload.php#73762)
	$POST_MAX_SIZE = ini_get('post_max_size');
	$unit = strtoupper(substr($POST_MAX_SIZE, -1));
	$multiplier = ($unit == 'M' ? 1048576 : ($unit == 'K' ? 1024 : ($unit == 'G' ? 1073741824 : 1)));

	if ((int)$_SERVER['CONTENT_LENGTH'] > $multiplier*(int)$POST_MAX_SIZE && $POST_MAX_SIZE) {
		header("HTTP/1.1 500 Internal Server Error"); // This will trigger an uploadError event in SWFUpload
		echo "POST exceeded maximum allowed size.";
		exit(0);
	}

// Settings
	$save_path = "../resimler/";	
	$upload_name = "Filedata";
	$max_file_size_in_bytes = 2147483647;				// 2GB in bytes
	$extension_whitelist = array("jpg", "gif", "png");	// Allowed file extensions
	$valid_chars_regex = '.A-Z0-9_ !@#$%^&()+={}\[\]\',~`-';
	

    // kötü karakterleri de?i?tir.
    function bad_character_rewrite($text){

     $first = array("\\", "/", ":", ";", "~", "|", "(", ")", "\"", "#", "*", "$", "@", "%", "[", "]", "{", "}", "<", ">", "`", "'", ",", " ", "ð", "Ð", "ü", "Ü", "þ", "Þ", "ý", "Ý", "ö", "Ö", "ç", "Ç","Ş","ş");
            $last = array("_", "_", "_", "_", "_", "_", "", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "", "_", "_", "g", "G", "u", "U", "s", "S", "i", "I", "o", "O", "c", "C","s","s");
            $text_rewrite = str_replace($first, $last, $text);
            return $text_rewrite;		
			
    }
	// Other variables	
	$file_name = "";
// Validate file name (for our purposes we'll just remove invalid characters)
	$file_name =  permayap(basename($_FILES[$upload_name]['name']));
    // ayni isimdeki dosya kontrolu

	$gun = gmdate ("d");
    $ay = gmdate ("m");
    $saat = gmdate ("g");
    $yil = gmdate ("Y");
    $dakika = gmdate ("i");
    $saniye = gmdate ("s");
    $saat = gmdate ("H");
	
	$mt = microtime(); 
	$mt2 = explode(" ",$mt); 
	$salise = $mt2[1];

$tarih= $yil.$ay.$gun;
$zaman=  $saat.$dakika.$saniye;
$rastgele = rand(000000001,999999999).'_'.rand(000000001,999999999).'_';
$file_name = $tarih.$zaman.$salise."_".$rastgele.$file_name;



 		if (!@move_uploaded_file($_FILES[$upload_name]["tmp_name"], $save_path.$file_name)) {
		HandleError("File could not be saved.");
		exit(0);
	}



//////////////////////
if($file_name != "") {
$vt->sql("insert into ilan_foto (id,foto_adi,ilan_id) values (NULL,%s,%s) ");
$vt->arg($file_name,temizle($_POST["id"]));

$yuklenen_resim = $file_name;
	
if($vt->sor()>0) { 
HandleError("File could not be saved.");
$yuklenen_resim = "resimler/".$yuklenen_resim;
include_once("../thumb2.php");
resim_boyut($yuklenen_resim,"85","64");
resim_boyut($yuklenen_resim,"100","75");
resim_boyut($yuklenen_resim,"510","400");
// unlink("../".$yuklenen_resim);

/// echo $yuklenen_resim;
} else {echo "<h3>UYARI <BR> Uyari Kodu BP1300.<br>Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

	} else { echo "<h3>UYARI <BR>  Uyari Kodu BP1400.<br>Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.<br>OLASI UYARI SEBEBI : RESIM SEÇMEDEN RESIM YÜKLEMEYE ÇALISMANIZ.</h3>"; }

///////////////////////////////



	exit(0);

function HandleError($message) {
echo $message;
}

?>