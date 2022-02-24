<?php
    /**
    * eklenti hedefi: metin uzunlu�unun maksimum verilen de�ere e�it olmas�
    * �rnek kullan�m: max_uzunluk[10]
    * eklenti s�r�m�: v1.1
    * son g�ncelleme: 7 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_max_uzunluk($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $maxim = (int) $arg['param'][0];

        // do�rulama
        if( $fdo->uzunluk($value) <= $maxim ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L en fazla #1 karakter olmal�');
        return false;
    }
?>