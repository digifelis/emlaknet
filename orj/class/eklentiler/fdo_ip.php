<?php
    /**
    * eklenti hedefi: ip numaras�n�n ge�erli olup olmad���n� kontrol etmek
    * �rnek kullan�m: ip
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_ip($arg, &$fdo)
    {
        // arg�manlar
        $value = $arg['value'];

        // do�rulama
        if (preg_match('/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})$/', $value)) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L ge�erli bir IP numaras� de�il');
        return false;
    }
?>