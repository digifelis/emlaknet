<?php
    /**
    * eklenti hedefi: metin uzunlu�unun minimum verilen de�ere e�it olmas�
    * �rnek kullan�m: min_uzunluk[10]
    * eklenti s�r�m�: v1.1
    * son g�ncelleme: 7 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_min_uzunluk($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $minim = (int) $arg['param'][0];

        // do�rulama
        if( $fdo->uzunluk($value) >= $minim ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L en az #1 karakter olmal�');
        return false;
    }
?>