<?php
    /**
    * eklenti hedefi: metnin, girilen parametrelerden birisiyle e�it olup olmad���na bakar
    * �rnek kullan�m: esit[erhan] veya esit[erhan,burhan]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_esit($arg, &$fdo)
    {
        // arg�manlar
        $value = $arg['value'];
        $param = $arg['param']; // dizi tipinde gelir

        // do�rulama
        if ( ! in_array($value, $param) ) {
            $fdo->hataEkle(__FUNCTION__, '%L de�eri "#1" ile e�it olmal�');
            $fdo->hataEkle(__FUNCTION__, '%L de�eri "#?" ifadelerinden birisiyle e�it olmal�', true);
            return false;
        }
    }
?>