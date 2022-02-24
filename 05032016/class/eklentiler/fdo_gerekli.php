<?php
    /**
    * eklenti hedefi: form alanýnýn gerçekten var olup olmadýðýný kontrol etmek
    *                 DÝKKAT: form alaný dizi tipindeyse, dizide kaç eleman olduðuyla ilgilenmez! 
    * örnek kullaným: gerekli
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_gerekli($arg, &$fdo)
    {
        // argümanlar
        $field = $arg['field'];

        // doðrulama
        if ( $fdo->alanVar($field) ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L alaný gerekli');
        return false;
    }
?>