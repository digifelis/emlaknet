<?php
    /**
    * eklenti hedefi: metnin, 12:23 formatýnda bir saat olup olmadýðý
    * örnek kullaným: saat[12] veya saat[24]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_saat($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $param = (int) $arg['param'][0];

        // doðrulama
        if( $param !== 12 && $param !== 24 ) {
            $param = 24;
        }

        if( $param === 24 ){
            $sablon = '/^[0-2]{0,1}[0-3]:[0-5][0-9]/';
        } else {
            $sablon = '/^[0-1]{0,1}[0-1]:[0-5][0-9]/';
        }

        if( preg_match($sablon, $value)===1 ){
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, "%L '#1 saat' formatýnda olmalý");
        return false;
    }
?>