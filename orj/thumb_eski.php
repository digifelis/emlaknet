<?php

 
// Gösterilecek resmin yolu.
$p = $_GET['p'];
 
// Resmin istenilen genisligi.
// Olasi kötü amaçli kullanimlara karsi maximum genisligi 1024px olarak ayarliyoruz.
$w = intval($_GET['w']) > 10024 ? 10024 : intval($_GET['w']);
 
// Resmin istenilen yüksekligi
// Olasi kötü amaçli kullanimlara karsi maximum yüksekligi 768px olarak ayarliyoruz
$h = intval($_GET['h']) > 7068 ? 7068 : intval($_GET['h']);
 
// Belirtilen resim dosya sisteminde varsa...
if(file_exists($p)) {
	// Dosya adini ve uzantisini ayri ayri al.
	$dosyaAdi 	= substr($p, 0, strrpos($p, '.'));
	$uzanti 	= substr($p, strrpos($p, '.'));
 
	// Thumbnail dosya adini ögren
	/**
	 * Thumbnail dosya adi, scriptin sonraki çalismasinda kontrol edecegi
	 * içinde istenilen genisligin ve yüksekligin belirtildigi isimdir.
	 * Örnegin thumb.php?p=resim.jpg&w=100&h=75 seklinde çalistirilan script
	 * için thumbnail dosya adi "resim_100_75.jpg" olarak belirlenecektir.
	 */
	$thumbFileName = $dosyaAdi;
	$thumbFileName .= $w>0 ? '_w'.$w : '';
	$thumbFileName .= $h>0 ? '_h'.$h : '';
	$thumbFileName .= $uzanti;
 
	// Istenilen ölçülerde thumbnail daha önce talep edilmis ve dosya sistemine kaydedilmisse...
	if(file_exists($thumbFileName)) { // ... thumbnail dosyasina yönlen ve çalismayi durdur.
		header("Location: {$thumbFileName}");
		exit;
	} else { // ... ilk defa talep edilen thumbnail dosyasi için çalismaya basla
 
		// Resmin bilgilerini al
		$resim = getimagesize($p);
 
		if($w && !$h) { // Max. Genislik manuel olarak belirtilmis ve yükseklik belirtilmemisse...
			// ... genisligi istenilen ölçüye getir ...
			$genislik = $w;
			// ... yüksekligi genislige orantili bir sekilde hesapla.
			$yukseklik = round(($genislik*$resim[1])/$resim[0]);
		} elseif(!$w && $h) { // Max. Yükseklik manuel olarak belirtilmisse ve genislik belirtilmemisse
			// ... yüksekligi istenilen ölçüye getir ...
			$yukseklik = $h;
			// ... genisligi yükseklige orantili bir sekilde hesapla.
			$genislik = round(($yukseklik*$resim[0])/$resim[1]);
		} elseif($w && $h) { // Her iki özellikte manuel olarak belirtilmisse ...
			// ... özellikleri istenilen ölçüye getir.
			$yukseklik = $h;
			$genislik = $w;
		} else { // Her iki ölçü de girilmemisse ana resme git ve çalismayi durdur.
			header('Location: '. $p);
			exit;
		}
 
		// Resmin türüne göre ana resmi bellege kopyala
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
 
		// Belirlenen ölçülerde bos bir resim olustur
		$thumb = imagecreatetruecolor($genislik, $yukseklik);
		// Bellege kopyalanan ana resmi istenilen ölçülere göre küçülterek olusturulan resmi
		// az önce olusturdugumuz bos resmin içine yazdir.
		imagecopyresampled($thumb, $kopya_resim, 0, 0, 0, 0, $genislik, $yukseklik, $resim[0], $resim[1]);
 
		if($h) {
			/**
			 * Eger maximum yükseklik degeri manuel olarak girilmisse ve bu deger
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
		 * Resmin türüne göre olusturulan thumbnaili dosya sistemine yazdirmayi deneyecegiz.
		 * Resmin bulundugu klasörün yazma izinleri verilmisse thumbnail dosyasi yukarida
		 * ayarlanan isimle klasöre kaydedilir ve script kaydedilen bu dosyaya yönlendikten sonra
		 * çalismayi durdurur. Yazma izinlerinde sorun varsa -ki bu scriptin esprisini yok eder-
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
 
		// Tüm islemler bittikten sonra bellek bosaltilip bir nebze olsun sunucu rahatlatilir
		imagedestroy($sonuc);
	}
}
?>