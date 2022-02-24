<?php

 
// G�sterilecek resmin yolu.
$p = $_GET['p'];
 
// Resmin istenilen genisligi.
// Olasi k�t� ama�li kullanimlara karsi maximum genisligi 1024px olarak ayarliyoruz.
$w = intval($_GET['w']) > 10024 ? 10024 : intval($_GET['w']);
 
// Resmin istenilen y�ksekligi
// Olasi k�t� ama�li kullanimlara karsi maximum y�ksekligi 768px olarak ayarliyoruz
$h = intval($_GET['h']) > 7068 ? 7068 : intval($_GET['h']);
 
// Belirtilen resim dosya sisteminde varsa...
if(file_exists($p)) {
	// Dosya adini ve uzantisini ayri ayri al.
	$dosyaAdi 	= substr($p, 0, strrpos($p, '.'));
	$uzanti 	= substr($p, strrpos($p, '.'));
 
	// Thumbnail dosya adini �gren
	/**
	 * Thumbnail dosya adi, scriptin sonraki �alismasinda kontrol edecegi
	 * i�inde istenilen genisligin ve y�ksekligin belirtildigi isimdir.
	 * �rnegin thumb.php?p=resim.jpg&w=100&h=75 seklinde �alistirilan script
	 * i�in thumbnail dosya adi "resim_100_75.jpg" olarak belirlenecektir.
	 */
	$thumbFileName = $dosyaAdi;
	$thumbFileName .= $w>0 ? '_w'.$w : '';
	$thumbFileName .= $h>0 ? '_h'.$h : '';
	$thumbFileName .= $uzanti;
 
	// Istenilen �l��lerde thumbnail daha �nce talep edilmis ve dosya sistemine kaydedilmisse...
	if(file_exists($thumbFileName)) { // ... thumbnail dosyasina y�nlen ve �alismayi durdur.
		header("Location: {$thumbFileName}");
		exit;
	} else { // ... ilk defa talep edilen thumbnail dosyasi i�in �alismaya basla
 
		// Resmin bilgilerini al
		$resim = getimagesize($p);
 
		if($w && !$h) { // Max. Genislik manuel olarak belirtilmis ve y�kseklik belirtilmemisse...
			// ... genisligi istenilen �l��ye getir ...
			$genislik = $w;
			// ... y�ksekligi genislige orantili bir sekilde hesapla.
			$yukseklik = round(($genislik*$resim[1])/$resim[0]);
		} elseif(!$w && $h) { // Max. Y�kseklik manuel olarak belirtilmisse ve genislik belirtilmemisse
			// ... y�ksekligi istenilen �l��ye getir ...
			$yukseklik = $h;
			// ... genisligi y�kseklige orantili bir sekilde hesapla.
			$genislik = round(($yukseklik*$resim[0])/$resim[1]);
		} elseif($w && $h) { // Her iki �zellikte manuel olarak belirtilmisse ...
			// ... �zellikleri istenilen �l��ye getir.
			$yukseklik = $h;
			$genislik = $w;
		} else { // Her iki �l�� de girilmemisse ana resme git ve �alismayi durdur.
			header('Location: '. $p);
			exit;
		}
 
		// Resmin t�r�ne g�re ana resmi bellege kopyala
		switch($resim[2]) {
			case 1: // GIF
				$kopya_resim = imagecreatefromgif($p);
				$resim_mime_type = 'image/gif';
				break;
			case 2: // JPG
				$kopya_resim = imagecreatefromjpeg($p);
				$resim_mime_type = 'image/pjpeg';
				break;

			case 3: // PNG
				$kopya_resim = imagecreatefrompng($p);
				$resim_mime_type = 'image/png';
				break;
		}
 
		// Belirlenen �l��lerde bos bir resim olustur
		$thumb = imagecreatetruecolor($genislik, $yukseklik);
		// Bellege kopyalanan ana resmi istenilen �l��lere g�re k���lterek olusturulan resmi
		// az �nce olusturdugumuz bos resmin i�ine yazdir.
		imagecopyresampled($thumb, $kopya_resim, 0, 0, 0, 0, $genislik, $yukseklik, $resim[0], $resim[1]);
 
		if($h) {
			/**
			 * Eger maximum y�kseklik degeri manuel olarak girilmisse ve bu deger
			 * scriptin olusturdugu degerden farkliysa scriptin otomatik degeri yoksayilip
			 * elle girilen deger dikkate alinarak thumbnail yeniden boyutlandirilir
			 */
 
			if($yukseklik>$h) $yukseklik = $h;
 
			$thumb2 = imagecreatetruecolor($genislik, $yukseklik);
 
			imagecopy($thumb2, $thumb, 0, 0, 0, (($h-$yukseklik)/2), $genislik, $yukseklik);
			$sonuc = $thumb2;
		} else {
			$sonuc = $thumb;
		}
 
		/** Istenilen boyuttaki thumbnail artik hazir
		 * Resmin t�r�ne g�re olusturulan thumbnaili dosya sistemine yazdirmayi deneyecegiz.
		 * Resmin bulundugu klas�r�n yazma izinleri verilmisse thumbnail dosyasi yukarida
		 * ayarlanan isimle klas�re kaydedilir ve script kaydedilen bu dosyaya y�nlendikten sonra
		 * �alismayi durdurur. Yazma izinlerinde sorun varsa -ki bu scriptin esprisini yok eder-
		 * olusturulan thumbnail'i direkt olarak browser'a yollar ve her seferinde yukaridaki islemleri yapar
		 */

 
		switch($resim[2]) {
			case 1: // GIF
				if(@imagegif($sonuc,$thumbFileName)) {
					header('Location: '.$thumbFileName);
					exit;
				} else {
					header("Content-Type: {$resim_mime_type}");
					imagegif($sonuc);
				}
				break;
			case 2: // JPG
				if(@imagejpeg($sonuc,$thumbFileName,60)) {
					header('Location: '.$thumbFileName);
					exit;
				} else {
					header("Content-Type: {$resim_mime_type}");
					imagejpeg($sonuc,NULL,80);
				}
				break;
				

				
			case 3: // PNG
				if(@imagepng($sonuc,$thumbFileName)) {
					header('Location: '.$thumbFileName);
					exit;
				} else {
					header("Content-Type: {$resim_mime_type}");
					imagepng($sonuc);
				}
				break;
		}
 
		// T�m islemler bittikten sonra bellek bosaltilip bir nebze olsun sunucu rahatlatilir
		imagedestroy($sonuc);
	}
} else {
	
	 $p = $_GET['p'];
$w = $_GET['w'];
$h = $_GET['h'];

	$dosyaAdi 	= substr($p, 0, strrpos($p, '.'));
	$uzanti 	= substr($p, strrpos($p, '.'));

 	$thumbFileName = $dosyaAdi;
	$thumbFileName .= $w>0 ? '_w'.$w : '';
	$thumbFileName .= $h>0 ? '_h'.$h : '';
	$thumbFileName .= $uzanti;

if(file_exists($thumbFileName)) { // ... thumbnail dosyasina y�nlen ve �alismayi durdur.
		header("Location: {$thumbFileName}");
		exit;
	} else { exit; }


	
	}
?>
