<?php
    /**
    * eklenti hedefi: girilen de�er, belirtilen say�dan b�y�k olmal�
    * �rnek kullan�m: sayi_buyuk[30]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_sayi_buyuk($arg, &$fdo)
    {
        // arg�manlar
        $value = (int) $arg['value'];
        $param = (int) $arg['param'][0];

        // do�rulama
        if( $value > $param ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L #1 say�s�ndan b�y�k olmal�');
        return false;
    }
?>