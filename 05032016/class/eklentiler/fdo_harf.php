<?php
    /**
    * eklenti hedefi: metin i�eri�i, tamamen harflerden olu�mal�
    * �rnek kullan�m: harf[en] veya harf[tr]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_harf($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $param = (isset($arg['param'][0])) ? $arg['param'][0] : 'en';

        // do�rulama
        if( $param === 'en' ){
            $desen = '/^[a-zA-Z]+$/';
            $mesaj = '%L yaln�zca harflerden olu�mal� (t�rk�e harfler olamaz)';
        }
        if( $param === 'tr' ){
            $desen = '/^[a-zA-Z������������]+$/';
            $mesaj = '%L yaln�zca harflerden olu�mal� (t�rk�e harfler olabilir)';
        }
        if( preg_match($desen, $value)===1 ){
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, $mesaj);
        return false;
    }
?>