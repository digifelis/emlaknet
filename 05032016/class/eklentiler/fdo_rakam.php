<?php
    /**
    * eklenti hedefi: içerik tamamen rakamlardan oluþmalý
    * örnek kullaným: sayi
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_rakam($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];

        // doðrulama
        // 'ctype_digit' fonksiyonu girdi olarak 
        // string tipinde deðer kabul ediyor
        if( ctype_digit($value) ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L yalnýzca rakamlardan oluþmalý');
        return false;
    }
?>