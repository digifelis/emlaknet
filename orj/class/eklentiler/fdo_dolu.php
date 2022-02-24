<?php
    /**
    * eklenti hedefi: metnin bo� olup olmad���n� kontrol etmek (dolu mu?)
    * �rnek kullan�m: dolu
    * eklenti s�r�m�: v1.1
    * son g�ncelleme: 7 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_dolu($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];

        // do�rulama
        if (strlen($value) > 0) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L bo� olmamal�');
        return false;
    }
?>