<?php
    /**
    * eklenti hedefi: metin uzunluðunun minimum verilen deðere eþit olmasý
    * örnek kullaným: min_uzunluk[10]
    * eklenti sürümü: v1.1
    * son güncelleme: 7 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_min_uzunluk($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $minim = (int) $arg['param'][0];

        // doðrulama
        if( $fdo->uzunluk($value) >= $minim ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L en az #1 karakter olmalý');
        return false;
    }
?>