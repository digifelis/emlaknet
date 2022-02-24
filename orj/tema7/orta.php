<DIV style="Z-INDEX: 7000">
<DIV align=left>



<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye ana sayfa */
google_ad_slot = "6345695723";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>




</DIV></DIV>
<DIV class="clear h10"></DIV>
<DIV id=content>
<DIV class="left w720">
<!-- INDEX SEARCHBOX BG END -->
<DIV class="clear h10"></DIV><!-- TOPOFFERS -->






<DIV class="boxtop_white_rounded w720">
<div class="top"></div>
<div class="end"></div>
</DIV>

<div class="box_white_content w700">







    <link rel="stylesheet" href="tema7/themes/default/default.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="tema7/nivo-slider.css" type="text/css" media="screen" />

     <div class="slider-wrapper theme-default">

 <div id="slider" class="nivoSlider">

      <?php
 
  $vt->sql("select slider from ayar where id=1")->sor();

  $slider = $vt->alTek();

  

   $Sliste = explode(',' , $slider);

   

  for($i=0;$i<count($Sliste);$i++) {

	  $vt->sql('select foto_adi from ilan_foto where ilan_id="'.$Sliste[$i].'" limit 0,1   ')->sor(); 

$foto_adi = $vt->alTek();

 
	  ?>

     

                

                <a href="#" class="nivo-imageLink"><img  src="thumb.php?p=resimler/<?php echo $foto_adi; ?>&w=661&h=320"  alt=""  /></a>
 
               
 
            

            <?php 
  }
  ?>

</div>

</div>





<script type="text/javascript" src="tema6/jquery.nivo.slider.js"></script>

    <script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider(

								{

			effect:'random', //efektler: 'fold,fade,sliceDown'				

			 directionNav:true, //ileri ve geri dügmelerini goster

 			 directionNavHide:true, //gezinme dugmelerini sadece fare uzerine gelince goster

 			 controlNav:false, //1,2,3 dugmeleri					

			 pauseOnHover:true, //uzerine gelince animasyonu durdur					

			         prevText: ' Geri',

        nextText: 'Ileri '

								});

    });

    </script>







</div>

<div class="boxend_white_rounded w720">
<div class="top"></div>
<div class="end"></div>

</div>
<DIV class=clear></DIV>
<br /><br />






<!--başlık başlangıç  -->
<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> Vitrin &#304;lanlar</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>
<!--başlık bitiş -->

<DIV class="boxtop_white_rounded w720">
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>







<DIV class="box_white_content w700">
<UL class=topofferbox_item>
 

<div class="vcard">



 


 
  <?php 
  		$vt->sql("select id from ilan_ticari where onay='4' ")->sor(15);
				$veriler = $vt->alHepsi();
				foreach($veriler as $veri) {
				$rastgele[]= $veri->id;
				}
				$x=0;
				$rastgele=@array_flip($rastgele);
				// belirtilen sayida çikartma bölümü baslangici
				for($i=1;$i <= $vitrin_ilan_sayisi; $i++){
				
				
				
				
								$rastgele_id = @array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
// $vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor(15);

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  limit 0,1")->sor(15);


$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;
$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';

if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $tablo = '<li> ';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "")
{ $tablo .= '<A class="image_showdetail url" 
  title="'.$ilan_basligi.'" href="detail_'.$veri->id.'_'.$ilan_adres.'"><img name=""  src="thumb.php?p=resimler/'.$vt->alTek().'&w=100&h=75" alt="" border=0 /><DIV class=detailbanner></DIV></a>'; } else { 
$tablo .= '<A class="image_showdetail url" 
  title="'.$ilan_basligi.'" href="detail_'.$veri->id.'_'.$ilan_adres.'"><img  class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><DIV class=detailbanner></DIV></a>'; }	
										}

if($uye_tipi == 2 ) {
 $tablo .= '<A class="image_showdetail url" 
  title="'.$ilan_basligi.'" href="detail_'.$veri->id.'_'.$ilan_adres.'"><img class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><DIV class=detailbanner></DIV></a>'; 	
					}

 }

else 

{ $tablo .= '<A class="image_showdetail url" 
  title="'.$ilan_basligi.'" href="detail_'.$veri->id.'_'.$ilan_adres.'"> <IMG class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><DIV class=detailbanner></DIV></a>'; }



$tablo .= ' <DIV class=detailbanner></DIV> <DIV class=image_shadow_120></DIV>
  <DIV class=title><A class="darkgreen bold underline url"  title="'.$ilan_basligi .'"  href="detail_'.$veri->id.'_'.$ilan_adres.'"><div class="adr">'.$ilan_basligi.'</div></A></div><A class="darkred bold url" href="detail_'.$veri->id.'_'.$ilan_adres.'">'.ondalik($veri->fiyat)."&nbsp;".$birim.'</A></div> </li>';




 } 
 
 $data_vitrin[$x] = $tablo;
	 $x++;
				}
	echo resim_listele(4,0,0,$data_vitrin);  
	 ?>  





</div>


</UL>
<DIV class=clear></DIV></DIV>
<DIV class="boxend_white_rounded w720">
<DIV class=top></DIV>
<DIV class=end></DIV></DIV><!-- OTHER TOPICS -->
<DIV class="p_l_10 p_t_10">
<H3 class="black s20 bold" title="En Popüler Aramalar">En Pop&uuml;ler Aramalar</H3>
<DIV class="clear h5"></DIV>
<UL class=list_arrowed_overflow>
 


 <LI class=w150><A class=black title="" href="http://emlaknetturkiye.com/index.php?action=arama&tur=1&liste=1" rel=follow,index>Sat&#305;l&#305;k Bina</A></LI>


	 
<li class=w150><a class="black" href="index.php?action=arama&amp;tur=2&amp;liste=1">Sat&#305;l&#305;k &Ccedil;iftlik</a></li>
	 
<li class=w150><a class="black" href="index.php?action=arama&amp;tur=3&amp;liste=1">Sat&#305;l&#305;k Daire</a></li>
	 
<li class=w150><a class="black" href="index.php?action=arama&amp;tur=4&amp;liste=1">Sat&#305;l&#305;k Devrem&uuml;lk</a></li>
	 
<li class=w150><a class="black" href="index.php?action=arama&amp;tur=5&amp;liste=1">Sat&#305;l&#305;k Kooperatif</a></li>
	 




<li class=w150><a class="black" href="index.php?action=arama&amp;tur=20&amp;liste=1">Kat Kar&#351;&#305;l&#305;&#287;&#305; Arsa</a></li>
	 

<li class=w150><a class="black" href="index.php?action=arama&amp;tur=21&amp;liste=1">Sat&#305;l&#305;k Arazi</a></li>
	 

<li class=w150><a class="black" href="index.php?action=arama&amp;tur=22&amp;liste=1">Sat&#305;l&#305;k Arsa</a></li>
 

<li class=w150><a class="black" href="index.php?action=arama&amp;tur=27&amp;liste=1">Sat&#305;l&#305;k Tarla</a></li>


<li class=w150><a class="black" href="index.php?action=arama&amp;tur=8&amp;liste=1">Sat&#305;l&#305;k Villa</a></li>
	 
<li class=w150><a class="black" href="index.php?action=arama&amp;tur=9&amp;liste=1">Sat&#305;l&#305;k Yazl&#305;k</a></li> 


<li class=w150><a class="black" href="index.php?action=arama&amp;tur=12&amp;liste=1">Kiral&#305;k Daire</a></li>

<li class=w150><a class="black" href="index.php?action=arama&amp;tur=17&amp;liste=1">Kiral&#305;k Yazl&#305;k</a></li>

</UL>
<DIV class="clear h20"></DIV></DIV><!-- OFFERS SLIDER -->
<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> En Yeni &#304;lanlar</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>
<DIV class=anythingSlider_large>
<DIV class=wrapper>
<UL>
            
    
<?php 
				
				
				
		$x=0;
			for($i=1;$i <= $yeni_ilan_sayisi; $i++){
				$ii = $i-1;
				
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id  DESC limit ".$ii.",1")->sor();


//$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor(15);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $table1 = '';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "") {

$table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"><img name="'.$ilan_adres.'"  src="thumb.php?p=resimler/'.$vt->alTek().'&w=100&h=75" width="100" height="75" alt="" border=0 />
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; } else { 
$table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"> <img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; }	
										}

if($uye_tipi == 2 ) {
 $table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"><img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; 	
					}

 }

else 

{ $table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"> <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; }
$table1 .= '<DIV class=title><a class="darkgreen bold underline title_oflow"  href="detail_'.$veri->id.'_'.$ilan_adres.'">'.$ilan_basligi.'</a></div><br> <FONT 
  class="darkred bold">'.ondalik($veri->fiyat)."&nbsp;".$birim.'</font></DIV> ';
 }












 
		 $data_yeni[$x] = $table1;
		 $x++;
		   }
		 
		  //  echo resim_listele(4,0,0,$data_yeni); 
		 

echo '<li style="float=left;"><table><tr><td>' . $data_yeni[0] .'</td><td>'. $data_yeni[1]  .'</td><td>'. $data_yeni[2] .'</td><td>'. $data_yeni[3] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[4] .'</td><td>'. $data_yeni[5]  .'</td><td>'. $data_yeni[6] .'</td><td>'. $data_yeni[7] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[8] .'</td><td>'. $data_yeni[9]  .'</td><td>'. $data_yeni[10] .'</td><td>'. $data_yeni[11] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[12] .'</td><td>'. $data_yeni[13]  .'</td><td>'. $data_yeni[14] .'</td><td>'. $data_yeni[15] .'</td></tr></table></li>';  



		   // bitis ?>




</UL></DIV></DIV>




 




<DIV class="clear h10"></DIV>
<SCRIPT type=text/javascript>
$(document).ready(function() {
$('.anythingSlider_large').anythingSlider({
easing: "swing",
autoPlay: true,
startStopped: false,
delay: 7000,
animationTime: 600,
hashTags: false,
buildNavigation: false,
pauseOnHover: true,
startText: "",
stopText: "",
navigationFormatter: null
});
});
</SCRIPT>

<DIV class="clear h10"></DIV><!-- BRANDS, TRADERS, AREAS -->



<!-- 2. slider bölümü başlangıcı-->
	<DIV class=titlebar_simple_top>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class=titlebar_simple_content><SPAN class=title> En Yeni &#304;lanlar</SPAN>
<DIV class=clear></DIV></DIV>
<DIV class=titlebar_simple_end>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h5"></DIV>
<DIV class=anythingSlider_large>
<DIV class=wrapper>
<UL>
            
    
<?php 
				
				
				
		$x=0;
			for($i=1;$i <= $yeni_ilan_sayisi; $i++){
				$ii = $i-1;
				$ii = $ii + $yeni_ilan_sayisi;
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id  DESC limit ".$ii.",1")->sor();


//$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor(15);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $table1 = '';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "") {

$table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"><img name="'.$ilan_adres.'" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 />
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; } else { 
$table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"> <img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; }	
										}

if($uye_tipi == 2 ) {
 $table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"><img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; 	
					}

 }

else 

{ $table1 .= '<DIV class=slideritem_large>
  <DIV class="w120 auto"><a class=image_showdetail href="detail_'.$veri->id.'_'.$ilan_adres.'"> <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75">
  <DIV class=detailbanner></DIV></A>
  <DIV class="image_shadow_120 auto"></DIV></DIV>'; }
$table1 .= '<DIV class=title><a class="darkgreen bold underline title_oflow"  href="detail_'.$veri->id.'_'.$ilan_adres.'">'.$ilan_basligi.'</a></div><br> <FONT 
  class="darkred bold">'.ondalik($veri->fiyat)."&nbsp;".$birim.'</font></DIV> ';
 }












 
		 $data_yeni[$x] = $table1;
		 $x++;
		   }
		 
		  //  echo resim_listele(4,0,0,$data_yeni); 
		 

echo '<li style="float=left;"><table><tr><td>' . $data_yeni[0] .'</td><td>'. $data_yeni[1]  .'</td><td>'. $data_yeni[2] .'</td><td>'. $data_yeni[3] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[4] .'</td><td>'. $data_yeni[5]  .'</td><td>'. $data_yeni[6] .'</td><td>'. $data_yeni[7] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[8] .'</td><td>'. $data_yeni[9]  .'</td><td>'. $data_yeni[10] .'</td><td>'. $data_yeni[11] .'</td></tr></table></li>';  
echo '<li style="float=left;"><table><tr><td>' . $data_yeni[12] .'</td><td>'. $data_yeni[13]  .'</td><td>'. $data_yeni[14] .'</td><td>'. $data_yeni[15] .'</td></tr></table></li>';  



		   // bitis ?>




</UL></DIV></DIV>




 




<DIV class="clear h10"></DIV>
<SCRIPT type=text/javascript>
$(document).ready(function() {
$('.anythingSlider_large').anythingSlider({
easing: "swing",
autoPlay: true,
startStopped: false,
delay: 7000,
animationTime: 600,
hashTags: false,
buildNavigation: false,
pauseOnHover: true,
startText: "",
stopText: "",
navigationFormatter: null
});
});
</SCRIPT>

<DIV class="clear h10"></DIV><!-- BRANDS, TRADERS, AREAS -->
<!--2. slider bitişi-->
   
	
<DIV class=tabs_simple_outerbox>
<UL class="tab_simple_large tabnav1">
  <LI><A href="#index_toptrader">Emlak 
Ofisleri</A></LI>
  <LI><A href="#index_newtrader">Yeni Emlak 
Ofisleri</A></LI></UL>

<DIV class=clear></DIV></DIV>
<DIV class=clear></DIV>
<DIV id=index_traderbox_living>
<DIV class="right w500">
<DIV id=index_toptrader class=tabs_content><FONT class="s14 bold">T&uuml;rkiye'nin En Se&ccedil;kin ve Pop&uuml;ler Emlak Ofisleri</FONT>
<DIV class="h10 line_dotted"></DIV>
<UL class=list_special>


 <?php
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 0,15  ")->sor(15);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a class="title darkgreen" title="'.$veri->sirket.''.$veri->sehiradiUpper.' "  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a><br><A class="region black" href="http://'.$veri->temiz_ad.'.'.$site.'" >'.$veri->sehiradiUpper.'</a></li>';
	}
	
	?>    




  
  
  
  </UL>
<DIV class=clear></DIV></DIV>
<DIV id=index_newtrader class=tabs_content><FONT class="s14 bold"> 
Yeni Kat&#305;lan Emlak Ofisleri</FONT>
<DIV class="h10 line_dotted"></DIV>
<UL class=list_special>



  <?php
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 15,15  ")->sor(15);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a class="title darkgreen" title="'.$veri->sirket.''.$veri->sehiradiUpper.' "  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a><br><A class="region black" href="http://'.$veri->temiz_ad.'.'.$site.'" >'.$veri->sehiradiUpper.'</a></li>';
	}
	
	?> 
  
  
  
  </UL>
<DIV class=clear></DIV></DIV></DIV><!-- RIGHT SIDE END -->
<DIV class=clear></DIV></DIV><!-- TRADERBOX END -->
<DIV class="clear h10"></DIV>
<DIV class=clear></DIV>
<SCRIPT type=text/javascript>
$(document).ready(function() {	
$('.anythingSlider_small').anythingSlider({
easing: "swing",
autoPlay: true, 
startStopped: false,
delay: 7000,
animationTime: 600,
hashTags: false,
buildNavigation: false,
pauseOnHover: true,
startText: "",
stopText: "",
navigationFormatter: null
});
});
</SCRIPT>

<!--kutu başlangıç -->
<DIV class="boxtop_white_rounded w720">
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>







<DIV class="box_white_content w700">
<table width="100%">
  <tr>
    <td><?php 
	$vt->sql('select * from reklam where yer=6 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?></td>
    <td><?php 
	$vt->sql('select * from reklam where yer=7 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?></td>
    <td><?php 
	$vt->sql('select * from reklam where yer=8 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?></td>
    <td><?php 
	$vt->sql('select * from reklam where yer=9 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?></td>
    <td><?php 
	$vt->sql('select * from reklam where yer=10 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?></td>
  </tr>
</table>

 










<DIV class=clear></DIV></DIV>
<DIV class="boxend_white_rounded w720">
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>





<!--kutu bitiş -->









<DIV class="clear h10"></DIV><!-- TOP KEYWORDS -->
<DIV class="clear h5"></DIV>
<DIV class="boxtop_white_rounded w720">
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>

<DIV class="boxend_white_rounded w720">

<DIV class=top></DIV>

<DIV class=end></DIV></DIV></DIV><!-- END OF LEFT SIDE --><!-- #########################################################################  --><!-- R SEITE -->
<DIV class="right w250"><!-- Reklam 1 -->
<CENTER>

  <!-- sağ taraf arama bölümü başlangıcı -->
<FORM method=get action="">
<INPUT name=aa value=1 type=hidden> 
<DIV class="boxtop_white_rounded w230">
<div class="top"></div>
<div class="end"></div>
</DIV>

<div class="box_white_content w210">






<DIV class=index_searchbox_areacol><LABEL class="lh20 bold">Gayrimenkul 
T&uuml;r&uuml;</LABEL> 
<DIV class="input_h26_white w150">


<SELECT id=il name=tur> 


<?php 
$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }
 ?>

  
  
  
  
  </SELECT> 
<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="clear h3"></DIV><LABEL class="lh20 bold">&#304;l</LABEL> 
<DIV class="input_h26_white w150">

<select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />

<option value="">Il se&ccedil;iniz</option>


      <?php
  $vt->sql("select * from sehir  order by sehiradiUpper ASC")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  echo '<option value="'.$veri->sehirID.'">'.$veri->sehiradiUpper.'</option>';
  }
  ?>





</SELECT> 
<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="clear h3"></DIV><LABEL class="lh20 bold">&#304;l&ccedil;e</LABEL> 
<DIV class="input_h26_white w150">

<select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">Il&ccedil;e se&ccedil;iniz</option>
</select>
<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="clear h3"></DIV><LABEL class="lh20 bold">Semt/K&ouml;y</LABEL> 
<DIV class="input_h26_white w150">




 <select name="koyler" id="koyler" size="1" />
  <option value="">Semt-K&ouml;y se&ccedil;iniz</option>
  </select>
      
      <input type=hidden  onClick="ilceleri_getir();"  />
      <input type=hidden onClick="koyleri_getir();"  /> 
 <input name="action" type="hidden" id="action" value="arama" />

<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV></DIV>




<DIV class="left w220"><LABEL class="lh20 bold">Fiyat Aral&#305;&#287;&#305;</LABEL> 
<DIV class=clear></DIV>
<DIV class="input_h26 w80 left">




 <input name="fiyat_alt" type="text"  id="fsID" onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />
      




<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="left lh26 w20 text_c s11">-</DIV>
<DIV class="input_h26 w80 left">

<input name="fiyat_ust" type="text"  id="feID" onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />


<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>



<DIV class="clear h3"></DIV><LABEL class="lh20 bold">&#304;lan 
            Sahibi</LABEL> 
<DIV class=clear></DIV>



<DIV class="input_h26 w80 left">

<input id=qmsID value="2" checked="checked" type="radio" 
                      name="user" />

	  <DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="left lh26 w20 text_c s11">-</DIV>
<DIV class="input_h26 w80 left"><LABEL class="lh20 bold">Sahibinden</label>
<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>

<INPUT  value=1 type=hidden name=liste>

<DIV class="input_h26 w80 left">

<input id=qmsID value="1" checked="checked" type="radio" 
                      name="user" />


<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>
<DIV class="left lh26 w20 text_c s11">-</DIV>
<DIV class="input_h26 w80 left"><LABEL class="lh20 bold">Emlakc&#305;dan</label>
<DIV class=lend></DIV>
<DIV class=rend></DIV></DIV>



<DIV class="clear h3"></DIV>
<DIV class=left><INPUT style="MARGIN: 20px 0px 0px" class="button_100x26 left" value=Ara type=submit> 
</DIV>
<DIV class=clear></DIV></DIV>





&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>

<div class="boxend_white_rounded w230">
<div class="top"></div>
<div class="end"></div>

</div>
<DIV class=clear></DIV>
</form>
<br /><br />

<!-- sağ taraf arama bölümü bitimi -->

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknet türkiye anasayfa sağ */
google_ad_slot = "1926395680";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>



</CENTER>
<DIV class="clear h20"></DIV><!-- PREMIUMANGEBOT -->
<DIV class="clear h10"></DIV><!-- OFFERS -->
<DIV class=tabs_simple_outerbox>
<UL class="tabs_simple tabnav2">
  <LI class=tab_simple><A href="#index_offers_2">Yeni &#304;lanlar</A></LI>
  <LI class=tab_simple><A href="#index_offers_1">Vitrin &#304;lanlar</A></LI></UL>
<DIV class=clear></DIV></DIV>
<DIV class=clear></DIV>
<DIV class="box_white_content w230">
<DIV id=index_offers_2 class=tabs_content2>
<UL class=index_offerlist>

   
<?php 
				
				
				
		$x=0;
			for($i=1;$i <= 10; $i++){
				$ii = $i-1;
				
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id DESC  limit ".$ii.",1")->sor();


//$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor(15);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;



$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}



$dizi[$x] = '<LI><DIV class=longtitle><a href="detail_'.$veri->id.'_'.$ilan_adres.'">'.$ilan_basligi.'</a></div>  <DIV class=date>'.ondalik($veri->fiyat)."&nbsp;".$birim.'</DIV><DIV class=clear></DIV> ';
 }
		   
		
		 $x++;
		   }



for( $d=0; $d<count($dizi); $d++) { 
echo $dizi[ $d ] . "
"; 
}

		   // bitis ?>


		   
 
  
  
  </UL>
<DIV class="clear h10"></DIV>
</DIV>
<DIV id=index_offers_1 class=tabs_content2>
<UL class=index_offerlist>

  
<?php 
				
				
				
		$x=0;
			for($i=1;$i <= 10; $i++){
				$ii = $i-1;

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay ='4'   group by ilan_ticari.id order by ilan_ticari.id  DESC limit ".$ii.",1")->sor();

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}

$dizi[$x] = '<LI><DIV class=longtitle><a href="detail_'.$veri->id.'_'.$ilan_adres.'">'.$ilan_basligi.'</a></div>  <DIV class=date>'.ondalik($veri->fiyat)."&nbsp;".$birim.'</DIV><DIV class=clear></DIV> ';
 }
		   		
		 $x++;
		   }

for( $d=0; $d<count($dizi); $d++) { 
echo $dizi[ $d ] . "
"; 
}

		   // bitis ?>

  
  </UL>
<DIV class="clear h10"></DIV>
</DIV></DIV>
<DIV class=boxend_white_rounded>
<DIV class=top></DIV>
<DIV class=end></DIV></DIV>
<DIV class="clear h10"></DIV><!-- FACEBOOK -->
<DIV class=bg_white>



<?php 
	$vt->sql('select * from reklam where yer=1 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>

<?php 
	$vt->sql('select * from reklam where yer=2 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=3 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=4 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>

<?php
include("sabit/sayac.php");

?>



</DIV></DIV>
<DIV class=clear></DIV>
<DIV class="clear h10"></DIV></DIV><!-- CONTENTBOX ENDE -->
<DIV id=footer_navibox>
<SCRIPT type=text/javascript>
$(document).ready(function() {
$('.footerbox').hide();
$('.footerbox:eq(0)').slideDown('500','easeInOutCirc');
$('.footerbox-button:eq(0)').addClass("active");
$('.footerbox-button').click(function() {
$('.footerbox').hide();
var activebox = $(this).attr("id");
$('#footerbox-'+ activebox ).slideDown('500','easeInOutCirc').show(function(){
$('#footerbox-'+ activebox ).show();
});				
$('.footerbox-button').removeClass("active");
$(this).addClass("active");
});	
});	
</SCRIPT>

<UL id=footer_navigation>
  <LI><SPAN id=base class=footerbox-button>EmlakNetT&uuml;rkiye</SPAN></LI>
  
<DIV class=clear></DIV></DIV>
