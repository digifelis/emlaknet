<?php
    /**
    * eklenti hedefi: metnin, 12:23 format�nda bir saat olup olmad���
    * �rnek kullan�m: saat[12] veya saat[24]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_saat($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $param = (int) $arg['param'][0];

        // do�rulama
        if( $param !== 12 && $param !== 24 ) {
            $param = 24;
        }

        if( $param === 24 ){
            $sablon = '/^[0-2]{0,1}[0-3]:[0-5][0-9]/';
        } else {
            $sablon = '/^[0-1]{0,1}[0-1]:[0-5][0-9]/';
        }

        if( preg_match($sablon, $value)===1 ){
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, "%L '#1 saat' format�nda olmal�");
        return false;
    }
?>