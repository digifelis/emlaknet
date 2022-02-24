<?php
    /**
    * eklenti hedefi: metnin boþ olup olmadýðýný kontrol etmek (dolu mu?)
    * örnek kullaným: dolu
    * eklenti sürümü: v1.1
    * son güncelleme: 7 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_dolu($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];

        // doðrulama
        if (strlen($value) > 0) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L boþ olmamalý');
        return false;
    }
?>