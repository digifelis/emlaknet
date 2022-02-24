<?php
    /**
    * eklenti hedefi: metin, belirlenen ifade veya ifadelerden birisi ile bitmeli
    * �rnek kullan�m: ile_biter[avi] veya ile_biter[avi,mp4]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_ile_biter($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $param = $arg['param'];
        $param = array_map('preg_quote', $param);

        // do�rulama
        $pattern = implode('|', $param);                // xyz|abc|123
        $pattern = '/(?:'.$pattern.')$/';               // \.xyz|\.abc|\.123
        if( preg_match($pattern, $value)===1 ){
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L "#1" ile bitmeli');
        $fdo->hataEkle(__FUNCTION__, '%L "#?" ifadelerinden birisiyle bitmeli', true);
        return false;
    }
?>