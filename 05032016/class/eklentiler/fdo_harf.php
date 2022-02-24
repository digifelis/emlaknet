<?php
    /**
    * eklenti hedefi: metin içeriði, tamamen harflerden oluþmalý
    * örnek kullaným: harf[en] veya harf[tr]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_harf($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $param = (isset($arg['param'][0])) ? $arg['param'][0] : 'en';

        // doðrulama
        if( $param === 'en' ){
            $desen = '/^[a-zA-Z]+$/';
            $mesaj = '%L yalnýzca harflerden oluþmalý (türkçe harfler olamaz)';
        }
        if( $param === 'tr' ){
            $desen = '/^[a-zA-ZýðüþöçÝÐÜÞÖÇ]+$/';
            $mesaj = '%L yalnýzca harflerden oluþmalý (türkçe harfler olabilir)';
        }
        if( preg_match($desen, $value)===1 ){
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, $mesaj);
        return false;
    }
?>