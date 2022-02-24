<?php

# data alinacak adres 
$resim_klasoru = "../resimler/";


$url1 = 'http://www.emlak.net/'.$_GET["ilan_no"].'-?t=2';  
$web_content1 = file_get_contents($url1);  

preg_match_all('/<div class="detail_images_previewbox loading3">(.*?)<div class="image_shadow_120"><\/div><\/div><div class="clear"><\/div>/i',$web_content1,$resim);

// print_r($resim[1]);
// echo $resim[1][0];
$pattern = '/\<img(.[^>]*)>/is';
// echo(preg_replace($pattern, '', $resim[1][0]));
$temiz = str_replace('<div class="image_shadow_120"></div></div><div class="detail_images_previewbox loading3">','',preg_replace($pattern, '', $resim[1][0]));
//echo $temiz;
preg_match_all('/<a href="(.*?)" onMouseOver="javascript:loadContent((.*?));"><\/a>/i',$temiz,$sonuc);
// print_r($sonuc[3]);
// echo count($sonuc[3]);

    function file_name_control($file_name) {
        
        if (!file_exists($file_name)) {
            return $file_name;
        }else{
            return rand(000000001,999999999).'_'.rand(000000001,999999999).'_'.$file_name;
        }
    }

for($i = 0; $i< count($sonuc[3]);$i++)
{
$sonuc[3][$i] = str_replace("('",'',$sonuc[3][$i]);	
$sonuc[3][$i] = str_replace("')",'',$sonuc[3][$i]);
$dosya_isim = @split('/',$sonuc[3][$i]);
copy("http://r3.emlak.net:8080/".$sonuc[3][$i],$resim_klasoru.''.file_name_control($dosya_isim[3]));
$k = $i + 1;
echo $k." nolu resim indirildi.<br>";
}
//print_r($sonuc[3]);
//echo "http://r3.emlak.net:8080/".$sonuc[3][0];
//$dosya_isim = @split('/',$sonuc[3][0]);
//print_r($dosya_isim);
    // ayni isimdeki dosya kontrolu

	

/*
$url = 'http://www.emlak.net/'.$_GET["ilan_no"].'-';  
$web_content = file_get_contents($url); 


preg_match_all('/<div class="detail_properties"><label>(.*?)<\/label><div class="text darkred bold">(.*?)<\/div><div class="clear"><\/div><\/div>/i',$web_content,$fiyat);

 preg_match_all('/<div class="detail_properties"><label>(.*?)<\/label><div class="text">(.*?)<\/div><div class="clear"><\/div><\/div>/i',$web_content,$title1);  
 preg_match_all('/<div class="p_l_10 p_r_10"><ul class="detail_configlist">(.*?)<\/ul>/i',$web_content,$title2); 
 preg_match_all('/<div class="mid">(.*?)<\/div><div class="rend"><\/div><\/div><div class="clear h5"><\/div><div class="p_l_10 p_r_10 lh18">(.*?)<\/div><div class="clear h10"><\/div>/i',$web_content,$title3); 

preg_match_all('/<div class="spacediv"><\/div><a href="(.*?)" title="(.*?)" rel="follow" class="his_link tooltip_south">/i',$web_content,$title4);





echo $fiyat[2][0]."<br>";
//echo $title1[0][0]."<br>";

echo $title1[2][0]."<br>";
echo $title1[2][1]."<br>";
echo $title1[2][2]."<br>";
echo $title1[2][3]."<br>";
echo $title1[2][4]."<br>";
echo $title1[2][5]."<br>";



//print_r($title1);  
// echo str_replace('</li></ul>','', str_replace('<div class="p_l_10 p_r_10"><ul class="detail_configlist"><li>','',$title2[0][0]))."<br>";

//print_r($title2); 
echo "kullanım amacı<br>";
echo $title2[1][0]."<br>";
echo "iç donanım<br>";
echo $title2[1][1]."<br>";
echo "dış donanım<br>";
echo $title2[1][2]."<br>";
echo "çevre özellikleri<br>";
echo $title2[1][3]."<br>";

echo $title3[2][0]."<br>"; 
echo $title4[1][0]."<br>";


*/

?>