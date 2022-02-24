<?php
    /**
    * eklenti hedefi: metin, belirlenen ifade veya ifadelerden birisi ile baþlamalý
    * örnek kullaným: ile_baslar[oya] veya ile_baslar[oya,bora]
    * eklenti sürümü: v1.0
    * son güncelleme: 5 Eylül 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_ile_baslar($arg, &$fdo)
    {
        // argümanlar
        $value = (string) $arg['value'];
        $param = $arg['param'];
        $param = array_map('preg_quote', $param);

        // doðrulama
        $pattern = implode('|', $param);                // xyz|abc|123
        $pattern = '/^(?:'.$pattern.')/';               // \.xyz|\.abc|\.123
        if( preg_match($pattern, $value) === 1 ){
            return true;
        }

        // hata çýktýsý
        $fdo->hataEkle(__FUNCTION__, '%L #1 ile baþlamalý');
        $fdo->hataEkle(__FUNCTION__, '%L "#?" ifadelerinden birisiyle baþlamalý', true);
        return false;
    }
?>