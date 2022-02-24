<?php
    /**
    * eklenti hedefi: form alan�n�n ger�ekten var olup olmad���n� kontrol etmek
    *                 D�KKAT: form alan� dizi tipindeyse, dizide ka� eleman oldu�uyla ilgilenmez! 
    * �rnek kullan�m: gerekli
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_gerekli($arg, &$fdo)
    {
        // arg�manlar
        $field = $arg['field'];

        // do�rulama
        if ( $fdo->alanVar($field) ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L alan� gerekli');
        return false;
    }
?>