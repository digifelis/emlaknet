<?php
    /**
    * eklenti hedefi: metnin, geçerli bir tarih olup olmadýðý
    * örnek kullaným: tarih[gün/ay/yýl]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_tarih($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $param = (isset($arg['param'][0])) ? $arg['param'][0] : 'gün/ay/yýl';

        // doðrulama
        if( fdo_tarih_kontrol($param, $value) ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, "%L '#1' formatýnda ve geçerli olmalýdýr");
        return false;
    }

    /**
     * $param: programcýnýn tanýmladýðý tarih þablonu
     * $value: ziyaretçinin gönderdiði tarih deðeri
    */
    function fdo_tarih_kontrol($param, $value) 
    {
        // gün ve yýl içerisindeki türkçe harfleri deðiþtir
        $param = strtr($param, array('ü'=>'u', 'ý'=>'i'));

        // tarih þablonu "gun/ay/yil , ay/yil/gun, yil/gun/ay" gibi formatlara uygun mu?
        if( !preg_match('/(?:gun|ay|yil)(\W)(?:gun|ay|yil)(\W)(?:gun|ay|yil)/', $param, $param) ){
            return false;
        }

        // "gün/ay/yýl" benzeri bir þablonda kullanýlan ayraçlar birebir ayný mý?
        if( $param[1] !== $param[2] ) {
            return false;
        }

        /*  programcýnýn ve ziyaretçinin tarih þablonlarýný parçalara ayýr.
            hem bu sayede programcý ile ziyaretçinin kullandýðý ayraçlarýn 
            ayný olup olmadýðýný da bakmýþ oluyoruz. eðer ayraçlar aynýysa 
            parça sayýlarý da ayný olacaktýr. */
        $parca1 = explode($param[1], $param[0]);
        $parca2 = explode($param[1], $value);

        // dizi sayýlarý eþit oldu mu?
        if( count($parca1) === count($parca2) )
        {
            // 'parca1' ve 'parca2' isimli dizileri tek bir dizide birleþtir.
            // Bunu 'array_combine' ile yapmadýk çünkü o sadece PHP 5'de var.
            $parca = array();
            $stopi = count($parca1);
            for($i=0; $i<$stopi; ++$i){
                $parca[$parca1[$i]] = $parca2[$i];
            }

            // GÜN kontrolü    (1 veya 2 basamaklý olmalý)
            if( preg_match('/\b(?:0?[1-9]|[12][0-9]|3[01])\b/', $parca['gun'])===0 ){
                return false;
            }
            // AY kontrolü    (1 veya 2 basamaklý olmalý)
            if( preg_match('/\b(?:0?[1-9]|1[012])\b/', $parca['ay'])===0 ){
                return false;
            }
            // YIL kontrolü    (4 basamaklý olmalý)
            if( preg_match('/\b(?:[1-9]{1}[0-9]{3})\b/', $parca['yil'])===0 ){
                return false;
            }

            // gerçekten varolan bir TARÝH olup olmadýðýna da bak
            return checkdate($parca['ay'], $parca['gun'], $parca['yil']);
        }

        return false;
    }
?>