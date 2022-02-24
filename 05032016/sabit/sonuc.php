
<div style="padding-left:12px;">
<?php 

	$vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>
</div>


<script src="tema1/js/sorttable.js" type="text/javascript"></script>
<style type="text/css">
table.sortable thead{
	background:#e3edef;
	color:#333333;
	text-align:center;
}
table.sortable thead h5{

	font-size: 18px;
}
</style>

<style type="text/css">
<!--
.tdliste {
	font-size: 14px;
	font-variant: normal;
	color: #030303;
	text-decoration: none;
}

.tdliste a {
	font-size: 14px;
	font-variant: normal;
	color: #030303;
	text-decoration: none;
}
.tdliste a:visited {
	font-size: 14px;
	font-variant: normal;
	color: #030303;
	text-decoration: none;
}
-->
</style>

<SCRIPT LANGUAGE="JavaScript">

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=1,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=300,left = 475,top = 272');");
}
// End -->
</script>



<TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=1 cellSpacing=2 cellPadding=2 width="950" align=center>
        <TBODY>
        <tr>
             <td width="195" rowspan="2" align="left" valign="top">
             
          
        
    
    <!--hyzly arama bölümü ba?alngyç -->



<?php include("sabit/hizli_arama2.php"); ?>

  <!--hyzly arama biti? -->

       
             
             
             
             
             
             
             
             
             
             </td>
             
          <td width="728" height="10">
  <form action="sabit/kriter.php" method="POST" target="_blank"> 

  <input type="image" name="btnResim" src="tema/img/disc.gif" alt="Bu aramay&#305; kriter listenize eklemek i&ccedil;in t&#305;klay&#305;n&#305;z" />
<input type="hidden" name="kriter" value="<?php echo $_SERVER['QUERY_STRING']; ?>" />
 <input type="hidden" name="islem" value="kriter_ekle" />
					Bu aramay&#305; kriter listenize eklemek i&ccedil;in soldaki simgeye t&#305;klay&#305;n&#305;z...


</form>

					  
                   
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* arama sayfası menu alt bağlantılar */
google_ad_slot = "0772816303";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>



        </td>
      
      


        </tr>
        
        <TR>
        
         <TD align="left" valign="top">
           <HR color=#cccccc SIZE=1 width="100%" noShade>
   
   <?php 
	
	$vt->sql('select grup_id from ilan_tipi where id="'.temizle($_GET["tur"]).'" limit 1   ')->sor(30);
$veriler66 = $vt->alHepsi();
foreach( $veriler66 as $veri66 ) {	$ilan_tipi66 = $veri66->grup_id; }
	
	if(temizle($_GET["liste"]) == 3 and $ilan_tipi66 == 1 ) {
		echo '<table width="100%" border="0" class="sortable">
		<thead>
  <tr>
    <td><h6>Baslik</h6></td>
    <td><h6>&#304;lan Tarihi</h6></td>
    <td><h6>Oda</h6></td>
    <td><h6>Salon</h6></td>
    <td><h6>Y. Oda</h6></td>
    <td><h6><strong>m²</strong></h6></td>
    <td><h6>Fiyat</h6></td>
  </tr>
  </thead>
              ';
	}
	
	if(temizle($_GET["liste"]) == 3 and $ilan_tipi66 == 3 ) {
		echo '<table width="100%" border="0" class="sortable">
		<thead>
  <tr>
    <td><h6>Baslik</h6></td>
    <td><h6>&#304;lan Tarihi</h6></td>
   
    <td><h6><strong>m²</strong></h6></td>
    <td><h6>Fiyat</h6></td>
  </tr>
   </thead>           ';
	}	
	
		if(temizle($_GET["liste"]) == 3 and $ilan_tipi66 == 2 ) {
		echo '<table width="100%" border="0">
		<thead>
  <tr>
    <td><h6>Baslik</h6></td>
    <td><h6>&#304;lan Tarihi</h6></td>
   
    <td><h6><strong>m²</strong></h6></td>
    <td><h6>Fiyat</h6></td>
  </tr>
     </thead>         ';
	}	
	
	
	
	 		$fiyat1 = 0;
	 		$fiyat2 = 100000000;

	if(temizle($_GET["ilan_no"]) == "" and temizle($_GET["dosya_no"]) == "" ) {
			
	if(temizle($_GET["tur"]) !='') { $tur = ' and  ilan_tipi_id = "'.temizle($_GET["tur"]).'"'; }
	
	if(temizle($_GET["fiyat_alt"]) !='') { $fiyat1 = temizle($_GET["fiyat_alt"]); } 
	if(temizle($_GET["fiyat_ust"]) !='') { $fiyat2 = temizle($_GET["fiyat_ust"]); }
			
	$fiyat = ' and ilan_ticari.fiyat  between "'.$fiyat1.'" and "'.$fiyat2.'" ';
	
	if( temizle($_GET["fiyat_alt"]) != '' and temizle($_GET["fiyat_ust"]) != '' ) 
	{
	if(temizle($_GET["birim"]) !='') { $birim1 = ' and  ilan_ticari.birim = "'.temizle($_GET["birim"]).'" '; }
	}
	
	if(temizle($_GET["iller"]) !='') { $iller = ' and  ilan_ticari.il= "'.temizle($_GET["iller"]).'" '; }
	if(temizle($_GET["ilceler"]) !='') { $ilceler = ' and  ilan_ticari.ilce = "'.temizle($_GET["ilceler"]).'" '; }
	if(temizle($_GET["koyler"]) !='') { $koyler = ' and  ilan_ticari.koy = "'.temizle($_GET["koyler"]).'" '; }
	
	if(temizle($_GET["user"]) == 0) { $user = ''; }
	if(temizle($_GET["user"]) == 1) { $user = ' and uyeler.uye_tipi = '.temizle($_GET["user"]).''; }  //// EMLAKÇILAR
	if(temizle($_GET["user"]) == 2) { $user = ' and uyeler.uye_tipi = '.temizle($_GET["user"]).''; }  /// normal üyeler
	
	
	if(temizle($_GET["resim"]) == 0) { $resim = ""; }
	if(temizle($_GET["resim"]) == 1) { $resim = " and ilan_foto.ilan_id=ilan_ticari.id "; }
	if(temizle($_GET["resim"]) == 2) { $resim = " and ilan_foto.ilan_id != ilan_ticari.id "; }

	
	if(temizle($_GET["tip"]) == '0') { $tip = " and tip='".temizle($_GET["tip"])."' "; }
	if(temizle($_GET["tip"]) == '1') { $tip = " and tip='".temizle($_GET["tip"])."' "; }

	if(temizle($_GET["grup"]) == 1) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	if(temizle($_GET["grup"]) == 2) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	if(temizle($_GET["grup"]) == 3) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	
	
	
	
	
	if(temizle($_GET["sira"]) == 1) { $siralama = ", ilan_ticari.fiyat ASC "; }	
	if(temizle($_GET["sira"]) == 2) { $siralama = " ,ilan_ticari.fiyat DESC "; }
	
	if(temizle($_GET["sira"]) == 3) { $siralama = ", ilan_ticari.bas_tarihi ASC "; }
	if(temizle($_GET["sira"]) == 4) { $siralama = ", ilan_ticari.bas_tarihi DESC "; }
	
	if(temizle($_GET["grup"]) == 1) {
	if(temizle($_GET["sira"]) == 5) { $siralama = ", ilan_ticari.metrekare ASC "; }
	if(temizle($_GET["sira"]) == 6) { $siralama = ", ilan_ticari.metrekare DESC "; }
	}

	if(temizle($_GET["grup"]) == 2 or temizle($_GET["grup"]) == 3 ) {
	if(temizle($_GET["sira"]) == 5) { $siralama = ", ilan_ticari.toplam_metrekare ASC "; }
	if(temizle($_GET["sira"]) == 6) { $siralama = ", ilan_ticari.toplam_metrekare DESC "; }
	}	
	
	if(temizle($_GET["ilan_no"]) !='') { $ilan_no = ' and  ilan_ticari.id = "'.temizle($_GET["ilan_no"]).'"'; }
	
	if(temizle($_GET["uye"]) !='') { $uye = ' and  ilan_ticari.uye_id = "'.temizle($_GET["uye"]).'"'; }
	
$kriterler = $tur.' '.$fiyat.' '.$birim1.' '.$iller.' '.$ilceler.' '.$koyler.' '.$user.' '.$resim.' '.$tip.' '.$grup .' '. $ilan_no .' '.$uye;

	} elseif(temizle($_GET["ilan_no"]) !='') {
		
		 $ilan_no = ' and  ilan_ticari.id = "'.temizle($_GET["ilan_no"]).'"'; 
	$kriterler =  $ilan_no ;

} elseif(temizle($_GET["dosya_no"]) !='') {
	 $dosya_no = ' and  ilan_ticari.dosya_no = "'.temizle($_GET["dosya_no"]).'"'; 
	$kriterler =  $dosya_no ;
} else {
	$kriterler =  "" ;
}
/// echo $kriterler;
 
if(temizle($_GET["sayfa"]) == "") {
$_SESSION["kriter"] = $kriterler;
} 
//echo "<br>".$_SESSION["kriter"]."<br>";
//echo $_SERVER['QUERY_STRING'];

function siralama($sirad){
$search  = array('&sira=1','&sira=2','&sira=3','&sira=4','&sira=5','&sira=6');
$replace = array('');
$subject = $_SERVER['QUERY_STRING'];
$sonuc = str_replace($search, $replace, $subject);
$sonuc = $sonuc.'&sira='.$sirad;
echo $sonuc;
}


?>

<table width="100%" border="1">
  <tr>
    <td>&nbsp;M<sup>2</sup> ye g&ouml;re &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artan  <a title="Artan" href="index.php?<?php siralama(5); ?>"><img src="img/up.jpg" border="0" height="15" width="15" /></a> &nbsp;&nbsp;&nbsp; Azalan  <a title="Azalan" href="index.php?<?php siralama(6); ?>"><img src="img/down.jpg" border="0" height="15" width="15" /></a> </td>
    <td>&nbsp;Fiyata g&ouml;re &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artan  <a title="Artan" href="index.php?<?php siralama(1); ?>"><img src="img/up.jpg" border="0" height="15" width="15" /></a> &nbsp;&nbsp;&nbsp; Azalan  <a title="Azalan" href="index.php?<?php siralama(2); ?>"><img src="img/down.jpg" border="0" height="15" width="15" /></a></td>
    <td>&nbsp;&#304;lan tarihine g&ouml;re &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artan  <a title="Artan" href="index.php?<?php siralama(3); ?>"><img src="img/up.jpg" border="0" height="15" width="15" /></a> &nbsp;&nbsp;&nbsp; Azalan  <a title="Azalan" href="index.php?<?php siralama(4); ?>"><img src="img/down.jpg" border="0" height="15" width="15" /></a></td>
 
  </tr>
</table>



<?php 



$sayfadaki_kayit_sayisi = 20;
if(temizle($_GET["sayfa"]) == '') {$limit = "limit 0,".$sayfadaki_kayit_sayisi;}
if(temizle($_GET["sayfa"]) != '') { $limit = "limit ".temizle($_GET["sayfa"]-1)* $sayfadaki_kayit_sayisi .", ".$sayfadaki_kayit_sayisi." "; }


/// echo '<br>'.$limit;

	$vt->sql('SELECT ilan_ticari.id FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id     '.$_SESSION["kriter"].' and ilan_ticari.onay not in (1,3) group by ilan_ticari.id '.$siralama.'  ')->sor(30);


$toplam_kayit =$vt->numRows();
/*
ilan_tipi_id,
il,
ilce,
koy,
ilan_ticari.id,
kullanim_durumu,
tapu_durum,
bulundugu_kat,
metrekare,
oda_sayi,
banyo_sayisi,
bina_kat_sayisi,
yapim_yili,
salon_sayisi,
yatak_odasi_sayisi,
bas_tarihi,
fiyat,
birim,
ilan_ticari.uye_tipi,
kullanilabilir_metrekare, 
ilan_ticari.uye_id,
toplam_metrekare,
*/
/// echo "<br>".$toplam_kayit;
$vt->sql('SELECT 
ilan_ticari.id,
uyeler.id as uye_id,
uyeler.uye_tipi as uye_tipi,
uyeler.sirket as sirket,
uyeler.temiz_ad as temiz_ad,
count(ilan_foto.ilan_id) as fotosay,
ilan_tipi.tip as tip,
ilan_tipi.grup_id
FROM ilan_ticari, uyeler , 
ilan_foto,ilan_tipi 
where ilan_ticari.uye_id = uyeler.id 
and ilan_ticari.ilan_tipi_id=ilan_tipi.id    
'.$_SESSION["kriter"].'  
and ilan_ticari.onay not in (1,3)   
group by ilan_ticari.id    
order by  ilan_ticari.onay DESC '.$siralama.' 
,ilan_ticari.id  DESC 
'. $limit .'')->sor(30);
////   ilan_ticari.onay DESC    ,ilan_ticari.id  DESC
/// echo $vt->alSql();
	
	if($vt->numRows() >0) {
	$veriler = $vt->alHepsi();
	
	foreach($veriler as $veri) {


$ilan_tipi = '';
$sehir='';
$ilce='';
$mahalle='';
$foto='';
$ilan_tipi_grup='';
$kullanim_durumu='';
$tapu_durumu='';
$vitrinse = '';



$vt->sql('select 
ilan_tipi_id,
il,
ilce,
koy,
id,
kullanim_durumu,
tapu_durum,
bulundugu_kat,
metrekare,
oda_sayi,
banyo_sayisi,
bina_kat_sayisi,
yapim_yili,
salon_sayisi,
yatak_odasi_sayisi,
bas_tarihi,
fiyat,
birim,

kullanilabilir_metrekare, 
ilan_ticari.uye_id,
toplam_metrekare
from ilan_ticari
 where ilan_ticari.id = "'.$veri->id.'" limit 1')->sor(30);
	$verilers = $vt->alHepsi();
	
	foreach($verilers as $veris) {
	
	$ilan_tipi_id = $veris->ilan_tipi_id;
	$ilv = $veris->il;
	$ilcev = $veris->ilce;
	$mahallev=$veris->koy;
	$id = $veris->id;
	$kullanim_durumuv = $veris->kullanim_durumu;
	$tapu_durumuv = $veris->tapu_durum;
	$bulundugu_katv = $veris->bulundugu_kat;
	$metrekarev = $veris->metrekare;
	$oda_sayiv = $veris->oda_sayi;
	$banyo_sayisiv = $veris->banyo_sayisi;
	$bina_kat_sayisiv = $veris->bina_kat_sayisi;
	$yapim_yiliv = $veris->yapim_yili;
	$salon_sayisiv = $veris->salon_sayisi;
	$yatak_odasi_sayisiv = $veris->yatak_odasi_sayisi;
	$bas_tarihiv = $veris->bas_tarihi;
	$fiyatv = $veris->fiyat;
	$birimv = $veris->birim;
	
	$kullanilabilir_metrekarev  = $veris->kullanilabilir_metrekare;
	$uye_idv = $veris->uye_id;
	$toplam_metrekarev = $veris->toplam_metrekare;
	}


if($veri->onay== 4){ $vitrinse = '<img src="tema/img/award_star_bronze_1.gif">';}


 $vt->sql('select adi from ilan_tipi where id="'.$ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi= $vt->alTek();
		
		
$vt->sql('	select 	  sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi from sehir,ilce,mahalle where sehir.sehirID="'.$ilv.'" and ilce.ilceID="'.$ilcev.'" and ilce.sehirID="'.$ilv.'" and mahalle.mahalleID="'.$mahallev.'" and  mahalle.ilceID="'.$ilcev.'" and mahalle.sehirID="'.$ilv.'" limit 1 ')->sor(30);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$sehir= $veri2->sehiradiUpper; $ilce = $veri2->ilceAdi; $mahalle = $veri2->mahalleAdi; }
 		
		

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'"   ')->sor(30);
$foto = $vt->alTek();

$vt->sql('select grup_id from ilan_tipi where id="'.$ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi_grup = $vt->alTek();

$vt->sql('select adi from kullanim_durumu where id="'.$kullanim_durumuv.'"   ')->sor(30);
$kullanim_durumu= $vt->alTek();

$vt->sql('select adi from tapu_durumu where id="'.$tapu_durumuv.'"   ')->sor(30);
$tapu_durumu= $vt->alTek();

if($ilan_tipi_grup == 1 and temizle($_GET["liste"]) == "1") {

		  if($bulundugu_katv == 0) {$bkat= "Kat Bilgisi Yok";} 
		  elseif ($bulundugu_katv == 100) {$bkat= "Zemin Kat&#305;";}
		  elseif ($bulundugu_katv == 101) {$bkat= "Bodrum Kat&#305;";}
		  elseif ($bulundugu_katv == 102) {$bkat= "Yar&#305; Bodrum Kat&#305;";} 
		  elseif ($bulundugu_katv == 103) {$bkat= "Giri&#351;               Kat&#305;";}
		  elseif ($bulundugu_katv == 104) {$bkat= "Bah&ccedil;e Kat&#305;";}
		  elseif ($bulundugu_katv == 105)  {$bkat= "&Ccedil;at&#305; Kat&#305;";}
		  elseif ($bulundugu_katv == 106) {$bkat= "Y&uuml;ksek               Giri&#351; Kat&#305;";}
		  elseif ($bulundugu_katv == 107) {$bkat= "Komplesi";}
		  elseif ($bulundugu_katv == 108) {$bkat= "&Ccedil;at&#305; Dubleksi";}
          elseif ($bulundugu_katv == 109) {$bkat= "Dubleksi";}
		  elseif ($bulundugu_katv == 110) {$bkat= "Tribleksi";}
		  else
		  { $bkat= $bulundugu_katv.'.&nbsp;Kat&#305;'; }

$ozellikler =
''.$metrekarev.' m<sup>2</sup>; &nbsp;
'.$oda_sayiv.' Oda &nbsp;
'.$salon_sayisiv.' Salon &nbsp;
'.$banyo_sayisiv.' Banyo &nbsp;
'.$bina_kat_sayisiv.' Katl&#305; Binan&#305;n &nbsp;
'.$bkat.' &nbsp;
Yap&#305;m Y&#305;l&#305;: '.$yapim_yiliv;

							}
							

if($ilan_tipi_grup == 3 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$toplam_metrekarev.' m<sup>2</sup>, <strong>Kullan&#305;labilir Metrekare:</strong> '.$kullanilabilir_metrekarev.' m<sup>2</sup><br />
  <strong>Kullan&#305;m Durumu:</strong> '.$kullanim_durumuv.'';
							}

if($ilan_tipi_grup == 2 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$toplam_metrekarev.' m<sup>2</sup>, <strong>Kullan&#305;labilir Metrekare:</strong> '.$kullanilabilir_metrekarev.' m<sup>2</sup><br />
  <strong>Tapu Durumu:</strong> '.$tapu_durumuv.'';
							}

///////////////////////////////
$vt->sql('select uye_tipi from uyeler where id= "'.$veri->uye_id.'" ')->sor(30); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30); 
$foto_adi = $vt->alTek();

if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$veri->uye_id."'")->sor(30); 
if($vt->alTek() != "") { $gresim = '<center><img name="" src="http://'.$site.'/thumb.php?p=resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { $gresim = '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; }	
										}

if($uye_tipi == 2 ) {
 $gresim =  '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; 	
					}

 }

else 

{ $gresim = ' <IMG border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75">'; }

/////////////////////////////
if($veri->uye_tipi == 3) { $gsahip =' ';} 
if($veri->uye_tipi == 2) { $gsahip =' ';} 
if($veri->uye_tipi == 1) { $gsahip =' '; }


if($birimv == 1) {$gbirim = '&nbsp;TL'; }
if($birimv == 2) {$gbirim ='&nbsp;Euro'; }
if($birimv == 3) { $gbirim ='&nbsp;USD'; }
if($birimv == 4) { $gbirim ='&nbsp;GBP'; }

 if($veri->uye_tipi == 1)
 {  $gperma = '<a href="?action=arama&uye='.$veri->uye_id.'&liste=1">Emlak&ccedil;&#305;n&#305;n Di&#287;er &#304;lanlar&#305;</a>'; }
 else if($veri->uye_tipi == 3 )
 {  $gperma = '<a href="?action=arama&uye='.$veri->uye_id.'&liste=1">Müteahhitin Di&#287;er &#304;lanlar&#305;</a>'; }
					  else
					  { $gperma = ''; }
							
/*  if($veri->uye_tipi == 1) {
						  $gperma = '<a href="http://'.$veri->temiz_ad.'.'.$site.'"> 
                        Diðer Ýlanlar&#305;</a>';
					  }	 */						
							
if(temizle($_GET["liste"]) == "1") {

$yazdir = ' <TABLE border=0 cellSpacing=1 cellPadding=1 width="100%" 
            bgColor=#c6e38b align=center >
           
              <TR>
                <TD vAlign=top rowSpan=2 width=15>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
                  
                  
                    <TR>
                      <TD>
				
					  <div  >
					  <A HREF="javascript:popUp(\'sabit/takip.php?id='. $veri->id .'\')">
					  <img src="tema/img/disc.gif" width=15  height=18 border=0 alt="Takibe / Haf&#305;zaya Al">
					  </A>
						</div>
						<br>
						'.$vitrinse.'
						</br>
						</TD></TR>
                    <TR>
                      <TD><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5></TD></TR>
                    <TR>
                      <TD>&nbsp;</TD></TR>
                    <TR>
                      <TD><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5></TD></TR>
                    <TR>
                      <TD>&nbsp;</TD></TR></TABLE>
					  </TD>
                <TD vAlign=top rowSpan=2 width=100>
             
                  <DIV style="POSITION: relative" align=center>
                  <A 
                  title="'. $ilan_tipi.' '.$sehir.' '.$ilce.' '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  
                 '. $gresim	  .'
                  
                  
                  </a></DIV></TD>
  <TD  vAlign=top width="75%" class=tdliste><FONT 
                  color=#003399 size=2><STRONG><A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'
                  
                  </A></STRONG> </FONT>
										
                </TD>
                <TD vAlign=top rowSpan=2 width=110 class=tdliste noWrap>
                  <DIV align=center><FONT color=#003399><STRONG>
				  '. ondalik($fiyatv).' '.
				 $gbirim
					 .'
                  </FONT> <BR><h6>&#304;lan Tarihi:<br>'. date("d-m-Y",strtotime($bas_tarihiv)) .'</h6> </DIV></TD></TR>
              <TR>
                <TD vAlign=top><STRONG>'. $ozellikler .'
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD width="50%">&nbsp;</TD>
                      <TD width="50%" class=tdliste>
                        <DIV align=center>&nbsp;&nbsp;&nbsp;
                      '.
					$gsahip .'&nbsp;'. $gperma
                       .' 
                        
                     
            </DIV></TD></TR></TBODY></TABLE></TD></TR></TABLE>
            <HR color=#cccccc SIZE=1 width="100%" noShade> ';
}

if($ilan_tipi_grup == 1 and temizle($_GET["liste"])== "3") {
	$yazdir = '
                <TR bgcolor="#EAEAEA">
             
				
                <TD class=tdliste><STRONG><FONT color=#003399>
				<A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'
                  
                  </A>
				</FONT></STRONG></TD>
				
  <TD class=tdliste>&nbsp;'.$bas_tarihiv.'</TD>
<TD class=tdliste><DIV align=center>'.$oda_sayiv.'</DIV></TD>
<TD class=tdliste><DIV align=center>'.$salon_sayisiv.'</DIV></TD>
<TD class=tdliste><DIV align=center>'.$yatak_odasi_sayisiv.'</DIV></TD>
<TD class=tdliste noWrap><DIV align=center>'.$metrekarev.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($fiyatv).' '.$gbirim.'</DIV></TD>
				  </tr>

            
				  ';
}

if($ilan_tipi_grup == 3 and temizle($_GET["liste"])== "3") {
	$yazdir = '
                <TR bgcolor="#EAEAEA">
                <TD class=tdliste><STRONG><FONT color=#003399>
				<A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'                  
                  </A>
				</FONT></STRONG></TD>				
  <TD class=tdliste>&nbsp;'.$bas_tarihiv.'</TD>
<TD class=tdliste noWrap><DIV align=center>'.$metrekarev.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($fiyatv).' '.$gbirim.'</DIV></TD>
				  </tr>
';
}

if($ilan_tipi_grup == 2 and temizle($_GET["liste"])== "3") {
	$yazdir = '
                <TR bgcolor="#EAEAEA">
                <TD class=tdliste><STRONG><FONT color=#003399>
				<A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'                  
                  </A>
				</FONT></STRONG></TD>				
  <TD class=tdliste>&nbsp;'.$bas_tarihiv.'</TD>
<TD class=tdliste noWrap><DIV align=center>'.$metrekarev.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($fiyatv).' '.$gbirim.'</DIV></TD>
				  </tr>
';
}


			echo $yazdir;
			
						
	?>
            
           

<?php 

} 
if(temizle($_GET["liste"]) == 3) { echo "</table>";}
/// pager yazisi gelecek
} else { echo "<center><h4>ARADIGINIZ KRITERLERE GÖRE SONUÇ BULUNAMADI.</h4></center><br>"; }



 $liste = temizle($_GET["liste"]);

echo "<center><h5>".sayfala(temizle($_GET["sayfa"]),$toplam_kayit,$sayfadaki_kayit_sayisi,'action=arama&liste='.$liste.'&sira='.$_GET["sira"].'&grup='.$_GET["grup"].'')."</h5></center>";	
?>




            
           
           <HR color=#cccccc SIZE=1 width="100%" noShade></FONT></TD>
         
        </TR>
        </TBODY></TABLE>