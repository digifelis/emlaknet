<?php
    /**
    * eklenti hedefi: i�erik tamamen rakamlardan olu�mal�
    * �rnek kullan�m: sayi
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_rakam($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];

        // do�rulama
        // 'ctype_digit' fonksiyonu girdi olarak 
        // string tipinde de�er kabul ediyor
        if( ctype_digit($value) ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L yaln�zca rakamlardan olu�mal�');
        return false;
    }
?>