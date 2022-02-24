<?php
    /**
    * eklenti hedefi: metin, belirlenen ifade veya ifadelerden birisi ile ba�lamal�
    * �rnek kullan�m: ile_baslar[oya] veya ile_baslar[oya,bora]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_ile_baslar($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $param = $arg['param'];
        $param = array_map('preg_quote', $param);

        // do�rulama
        $pattern = implode('|', $param);                // xyz|abc|123
        $pattern = '/^(?:'.$pattern.')/';               // \.xyz|\.abc|\.123
        if( preg_match($pattern, $value) === 1 ){
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, '%L #1 ile ba�lamal�');
        $fdo->hataEkle(__FUNCTION__, '%L "#?" ifadelerinden birisiyle ba�lamal�', true);
        return false;
    }
?>