<?php
    /**
    * eklenti hedefi: metnin, girilen parametrelerden birisiyle e�it olup olmad���na bakar
    *                 tam bir e�le�me yapar, metin i�erisinde arama yapmaz
    * �rnek kullan�m: esit_degil[sigara,alkol,uyu�turucu]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_esit_degil($arg, &$fdo)
    {
        // arg�manlar
        $value = $arg['value'];
        $param = $arg['param']; // dizi tipinde gelir

        // do�rulama
        if ( in_array($value, $param) ) {
            $fdo->hataEkle(__FUNCTION__, '%L de�eri "%D" ile e�it olmamal�');
            $fdo->hataEkle(__FUNCTION__, '%L de�eri "%D" ifadelerinden biriyle e�it olmamal�', true);
            return false;
        }
    }
?>