<?php
    /**
    * eklenti hedefi: metin uzunlu�unun belli aral�kta olmas�
    * �rnek kullan�m: ara_uzunluk[4,5]
    * eklenti s�r�m�: v1.1
    * son g�ncelleme: 7 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]hotpop[dot]com
    * adres: www.eburhan.com
    */
    function fdo_ara_uzunluk($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $field = $arg['field'];
        $label = $arg['label'];

        // do�rulama
        $min = (int) $arg['param'][0];
        $max = (int) $arg['param'][1];
        $len = $fdo->uzunluk($value);

        if( $len>=$min && $len<=$max ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L uzunlu�u #1 ile #2 aras�nda olmal�');
        return false;
    }
?>