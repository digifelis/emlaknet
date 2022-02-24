<?php
    /**
    * eklenti hedefi: metin uzunluðunun maksimum verilen deðere eþit olmasý
    * örnek kullaným: max_uzunluk[10]
    * eklenti sürümü: v1.1
    * son güncelleme: 7 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_max_uzunluk($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $maxim = (int) $arg['param'][0];

        // doðrulama
        if( $fdo->uzunluk($value) <= $maxim ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L en fazla #1 karakter olmalý');
        return false;
    }
?>