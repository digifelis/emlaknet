<?php
    /**
    * eklenti hedefi: girilen de�er, belirtilen de�erler aras�nda olmal� 
    *                 belirtilen de�erler dahil de�il !
    * �rnek kullan�m: sayi_arasinda[20,30]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_sayi_arasinda($arg, &$fdo)
    {
        // arg�manlar
        $value = (int) $arg['value'];

        // do�rulama
        $sayi1 = (int) $arg['param'][0];
        $sayi2 = (int) $arg['param'][1];

        if( $value>$sayi1 && $value<$sayi2 ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L #1 ile #2 say�lar� aras�nda olmal�');
        return false;
    }
?>