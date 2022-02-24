<?php
    /**
    * eklenti hedefi: e-posta edresinin ge�erli olup olmady?yny kontrol etmek
    * �rnek kullanym: eposta
    * eklenti s�r�m�: v1.1
    * son g�ncelleme: 7 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_eposta($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];

        // do?rulama
        if (preg_match('/^[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i', $value)===1) {
            return true;
        }

        // hata �yktysy
        $fdo->hataEkle(__FUNCTION__, '%L ge�erli bir e-posta adresi de?il');
        return false;
    }
?>