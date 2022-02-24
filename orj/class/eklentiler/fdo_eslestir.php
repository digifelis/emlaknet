<?php
    /**
    * eklenti hedefi: farklý iki form alanýna girilen deðerlerin, birbirlerine eþit olup olmadýðý
    * örnek kullaným: eslestir[alan,etiket]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_eslestir($arg, &$fdo)
    {
        // argümanlar
        $field1 = (string) $arg['field'];           // form alaný 1'in ismi
        $value1 = (string) $fdo->formOrj($field1);  // form alaný 1'nin deðeri (ziyaretçinin girdiði)

        // doðrulama
        $field2 = (string) $arg['param'][0];        // form alaný 2'nin ismi
        $value2 = (string) $fdo->formOrj($field2);  // form alaný 2'nin deðeri (ziyaretçinin girdiði)

        if( $value1 === $value2 ) {
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L ile #2 birbirleriyle eþleþmeli');
        return false;
    }
?>