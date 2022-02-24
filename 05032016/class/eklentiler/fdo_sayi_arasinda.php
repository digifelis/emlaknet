<?php
    /**
    * eklenti hedefi: girilen deðer, belirtilen deðerler arasýnda olmalý 
    *                 belirtilen deðerler dahil deðil !
    * örnek kullaným: sayi_arasinda[20,30]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_sayi_arasinda($arg, &$fdo)
    {
        // argümanlar
        $value = (int) $arg['value'];

        // doðrulama
        $sayi1 = (int) $arg['param'][0];
        $sayi2 = (int) $arg['param'][1];

        if( $value>$sayi1 && $value<$sayi2 ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L #1 ile #2 sayýlarý arasýnda olmalý');
        return false;
    }
?>