<?php
    /**
    * eklenti hedefi: metnin, girilen parametrelerden birisiyle eþit olup olmadýðýna bakar
    *                 tam bir eþleþme yapar, metin içerisinde arama yapmaz
    * örnek kullaným: esit_degil[sigara,alkol,uyuþturucu]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_esit_degil($arg, &$fdo)
    {
        // argümanlar
        $value = $arg['value'];
        $param = $arg['param']; // dizi tipinde gelir

        // doðrulama
        if ( in_array($value, $param) ) {
            $fdo->hataEkle(__FUNCTION__, '%L deðeri "%D" ile eþit olmamalý');
            $fdo->hataEkle(__FUNCTION__, '%L deðeri "%D" ifadelerinden biriyle eþit olmamalý', true);
            return false;
        }
    }
?>