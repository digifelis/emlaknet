<?php
    /**
    * eklenti hedefi: farkl� iki form alan�na girilen de�erlerin, birbirlerine e�it olup olmad���
    * �rnek kullan�m: eslestir[alan,etiket]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_eslestir($arg, &$fdo)
    {
        // arg�manlar
        $field1 = (string) $arg['field'];           // form alan� 1'in ismi
        $value1 = (string) $fdo->formOrj($field1);  // form alan� 1'nin de�eri (ziyaret�inin girdi�i)

        // do�rulama
        $field2 = (string) $arg['param'][0];        // form alan� 2'nin ismi
        $value2 = (string) $fdo->formOrj($field2);  // form alan� 2'nin de�eri (ziyaret�inin girdi�i)

        if( $value1 === $value2 ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L ile #2 birbirleriyle e�le�meli');
        return false;
    }
?>