<?php
    /**
    * eklenti hedefi: metnin, ge�erli bir tarih olup olmad���
    * �rnek kullan�m: tarih[g�n/ay/y�l]
    * eklenti s�r�m�: v1.0
    * son g�ncelleme: 5 Eyl�l 2009
    * 
    * yazar: Erhan BURHAN
    * email: eburhan[at]gmail[dot]com
    * adres: www.eburhan.com
    */
    function fdo_tarih($arg, &$fdo)
    {
        // arg�manlar
        $value = (string) $arg['value'];
        $param = (isset($arg['param'][0])) ? $arg['param'][0] : 'g�n/ay/y�l';

        // do�rulama
        if( fdo_tarih_kontrol($param, $value) ) {
            return true;
        }

        // hata ��kt�s�
        $fdo->hataEkle(__FUNCTION__, "%L '#1' format�nda ve ge�erli olmal�d�r");
        return false;
    }

    /**
     * $param: programc�n�n tan�mlad��� tarih �ablonu
     * $value: ziyaret�inin g�nderdi�i tarih de�eri
    */
    function fdo_tarih_kontrol($param, $value) 
    {
        // g�n ve y�l i�erisindeki t�rk�e harfleri de�i�tir
        $param = strtr($param, array('�'=>'u', '�'=>'i'));

        // tarih �ablonu "gun/ay/yil , ay/yil/gun, yil/gun/ay" gibi formatlara uygun mu?
        if( !preg_match('/(?:gun|ay|yil)(\W)(?:gun|ay|yil)(\W)(?:gun|ay|yil)/', $param, $param) ){
            return false;
        }

        // "g�n/ay/y�l" benzeri bir �ablonda kullan�lan ayra�lar birebir ayn� m�?
        if( $param[1] !== $param[2] ) {
            return false;
        }

        /*  programc�n�n ve ziyaret�inin tarih �ablonlar�n� par�alara ay�r.
            hem bu sayede programc� ile ziyaret�inin kulland��� ayra�lar�n 
            ayn� olup olmad���n� da bakm�� oluyoruz. e�er ayra�lar ayn�ysa 
            par�a say�lar� da ayn� olacakt�r. */
        $parca1 = explode($param[1], $param[0]);
        $parca2 = explode($param[1], $value);

        // dizi say�lar� e�it oldu mu?
        if( count($parca1) === count($parca2) )
        {
            // 'parca1' ve 'parca2' isimli dizileri tek bir dizide birle�tir.
            // Bunu 'array_combine' ile yapmad�k ��nk� o sadece PHP 5'de var.
            $parca = array();
            $stopi = count($parca1);
            for($i=0; $i<$stopi; ++$i){
                $parca[$parca1[$i]] = $parca2[$i];
            }

            // G�N kontrol�    (1 veya 2 basamakl� olmal�)
            if( preg_match('/\b(?:0?[1-9]|[12][0-9]|3[01])\b/', $parca['gun'])===0 ){
                return false;
            }
            // AY kontrol�    (1 veya 2 basamakl� olmal�)
            if( preg_match('/\b(?:0?[1-9]|1[012])\b/', $parca['ay'])===0 ){
                return false;
            }
            // YIL kontrol�    (4 basamakl� olmal�)
            if( preg_match('/\b(?:[1-9]{1}[0-9]{3})\b/', $parca['yil'])===0 ){
                return false;
            }

            // ger�ekten varolan bir TAR�H olup olmad���na da bak
            return checkdate($parca['ay'], $parca['gun'], $parca['yil']);
        }

        return false;
    }
?>