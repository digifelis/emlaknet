<?php
    /**
    * eklenti hedefi: metnin, girilen parametrelerden birisiyle eþit olup olmadýðýna bakar
    * örnek kullaným: esit[erhan] veya esit[erhan,burhan]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_esit($arg, &$fdo)
    {
        // argümanlar
        $value = $arg['value'];
        $param = $arg['param']; // dizi tipinde gelir

        // doðrulama
        if ( ! in_array($value, $param) ) {
            $fdo->hataEkle(__FUNCTION__, '%L deðeri "#1" ile eþit olmalý');
            $fdo->hataEkle(__FUNCTION__, '%L deðeri "#?" ifadelerinden birisiyle eþit olmalý', true);
            return false;
        }
    }
?>