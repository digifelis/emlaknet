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
<!-- Script sahibi:  Nic Wolfe (Nic@TimelapseProductions.com) -->
<!-- En iyi scriptler bu site de. http://www.bedava.mekani.com -->

<!-- Begin
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
              <form action="sabit/kriter.php" method="POST" target="_blank"> 
          <td width="728" height="10">
 
  <input type="image" name="btnResim" src="tema/img/disc.gif" alt="Bu aramay&#305; kriter listenize eklemek i&ccedil;in t&#305;klay&#305;n&#305;z" />
<input type="hidden" name="kriter" value="<?php echo $_SERVER['QUERY_STRING']; ?>" />
 <input type="hidden" name="islem" value="kriter_ekle" />
					Bu aramay&#305; kriter listenize eklemek i&ccedil;in soldaki simgeye t&#305;klay&#305;n&#305;z...
					  
                   
 
        </td>
      </form>
        </tr>
        <TR>
        
         <TD align="left" valign="top">
           <HR color=#cccccc SIZE=1 width="100%" noShade>

            
    <?php 
	

	$vt->sql('select * from ilan_tipi where id="'.temizle($_GET["tur"]).'"   ')->sor();
$veriler66 = $vt->alHepsi();
foreach( $veriler66 as $veri66 ) {	$ilan_tipi66 = $veri66->grup_id; }
	
	if(temizle($_GET["liste"]) == 3 and $ilan_tipi66 == 1 ) {
		echo '<table width="100%" border="0" class="sortable">
		<thead>
  <tr>
    <td><h6>Baslik</h6></td>
    <td><h6>Ilan Tarihi</h6></td>
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
    <td><h6>Ilan Tarihi</h6></td>
   
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
    <td><h6>Ilan Tarihi</h6></td>
   
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
	
	if(temizle($_GET["metrekare_alt"]) !='') { $metrekare1 = temizle($_GET["metrekare_alt"]); } 
	if(temizle($_GET["metrekare_ust"]) !='') { $metrekare2 = temizle($_GET["metrekare_ust"]); }
			
	$fiyat = ' and ilan_ticari.fiyat  between "'.$fiyat1.'" and "'.$fiyat2.'" ';
	
	if( temizle($_GET["fiyat_alt"]) != '' and temizle($_GET["fiyat_ust"]) != '' ) 
	{
	if(temizle($_GET["birim"]) !='') { $birim = ' and  ilan_ticari.birim = "'.temizle($_GET["birim"]).'"'; }
	}
	
	if(temizle($_GET["iller"]) !='') { $iller = ' and  ilan_ticari.il= "'.temizle($_GET["iller"]).'"'; }
	if(temizle($_GET["ilceler"]) !='') { $ilceler = ' and  ilan_ticari.ilce = "'.temizle($_GET["ilceler"]).'"'; }
	if(temizle($_GET["koyler"]) !='') { $koyler = ' and  ilan_ticari.koy = "'.temizle($_GET["koyler"]).'"'; }
	
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
	if(temizle($_GET["sira"]) == 4) { $siralama = ", ilan_ticari.bas_tarihi ASC "; }
	
	if(temizle($_GET["ilan_no"]) !='') { $ilan_no = ' and  ilan_ticari.id = "'.temizle($_GET["ilan_no"]).'"'; }
	
	if(temizle($_GET["uye"]) !='') { $uye = ' and  ilan_ticari.uye_id = "'.temizle($_GET["uye"]).'"'; }
	
	if(temizle($_GET["metrekare_alt"]) != 0 and temizle($_GET["metrekare_ust"]) != 0 ) 
	{
	$metrekare = ' and ilan_ticari.metrekare  between "'.$metrekare1.'" and "'.$metrekare2.'" ';
	}
	
	if(temizle($_GET["oda_alt"]) != 0 and temizle($_GET["oda_ust"]) != 0 ) 
	{
	$oda = ' and ilan_ticari.oda_sayi  between "'.temizle($_GET["oda_alt"]).'" and "'.temizle($_GET["oda_ust"]).'" ';
	}
	
	if(temizle($_GET["balkon"]) !=0) { $balkon = ' and  ilan_ticari.balkon = "'.temizle($_GET["balkon"]).'"'; }
	if(temizle($_GET["bahce"]) !=0) { $bahce = ' and  ilan_ticari.bahce = "'.temizle($_GET["bahce"]).'"'; }
	if(temizle($_GET["kd"]) !=0) { $kullanim_durumu = ' and  ilan_ticari.kullanim_durumu = "'.temizle($_GET["kd"]).'"'; }
	if(temizle($_GET["yd"]) !=0) { $yapi_durum = ' and  ilan_ticari.yapi_durum = "'.temizle($_GET["yd"]).'"'; }
	if(temizle($_GET["is"]) !=0) { $isinma_tipi = ' and  ilan_ticari.isinma_tipi = "'.temizle($_GET["is"]).'"'; }
	if(temizle($_GET["kullanimamaci"]) !=0) { $kullanimamaci = ' and  ilan_ticari.kullanim_amaci = "'.temizle($_GET["kullanimamaci"]).'"'; }
	if(temizle($_GET["tapudurumu"]) !=0) { $tapudurumu = ' and  ilan_ticari.tapu_durum = "'.temizle($_GET["tapudurumu"]).'"'; }
	
	   
	
	
	
	$icdonanim = '';
	if(temizle($_GET["a1"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a1 = "'.temizle($_GET["a1"]).'"'; }
	if(temizle($_GET["a2"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a2 = "'.temizle($_GET["a2"]).'"'; }
	if(temizle($_GET["a3"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a3 = "'.temizle($_GET["a3"]).'"'; }
	if(temizle($_GET["a4"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a4 = "'.temizle($_GET["a4"]).'"'; }
	if(temizle($_GET["a5"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a5 = "'.temizle($_GET["a5"]).'"'; }
	if(temizle($_GET["a6"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a6 = "'.temizle($_GET["a6"]).'"'; }
	if(temizle($_GET["a7"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a7 = "'.temizle($_GET["a7"]).'"'; }
	if(temizle($_GET["a8"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a8 = "'.temizle($_GET["a8"]).'"'; }
	if(temizle($_GET["a9"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a9 = "'.temizle($_GET["a9"]).'"'; }
	if(temizle($_GET["a10"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a10 = "'.temizle($_GET["a10"]).'"'; }
	if(temizle($_GET["a11"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a11 = "'.temizle($_GET["a11"]).'"'; }
	if(temizle($_GET["a12"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a12 = "'.temizle($_GET["a12"]).'"'; }
	if(temizle($_GET["a13"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a13 = "'.temizle($_GET["a13"]).'"'; }
	if(temizle($_GET["a14"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a14 = "'.temizle($_GET["a14"]).'"'; }
	if(temizle($_GET["a15"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a15 = "'.temizle($_GET["a15"]).'"'; }
	if(temizle($_GET["a16"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a16 = "'.temizle($_GET["a16"]).'"'; }
	if(temizle($_GET["a17"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a17 = "'.temizle($_GET["a17"]).'"'; }
	if(temizle($_GET["a18"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a18 = "'.temizle($_GET["a18"]).'"'; }
	if(temizle($_GET["a19"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a19 = "'.temizle($_GET["a19"]).'"'; }
	if(temizle($_GET["a20"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a20 = "'.temizle($_GET["a20"]).'"'; }
	if(temizle($_GET["a21"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a21 = "'.temizle($_GET["a21"]).'"'; }
	if(temizle($_GET["a22"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a22 = "'.temizle($_GET["a22"]).'"'; }
	if(temizle($_GET["a23"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a23 = "'.temizle($_GET["a23"]).'"'; }
	if(temizle($_GET["a24"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a24 = "'.temizle($_GET["a24"]).'"'; }
	if(temizle($_GET["a25"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a25 = "'.temizle($_GET["a25"]).'"'; }
	if(temizle($_GET["a26"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a26 = "'.temizle($_GET["a26"]).'"'; }
	if(temizle($_GET["a27"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a27 = "'.temizle($_GET["a27"]).'"'; }
	if(temizle($_GET["a28"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a28 = "'.temizle($_GET["a28"]).'"'; }
	if(temizle($_GET["a29"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a29 = "'.temizle($_GET["a29"]).'"'; }
	if(temizle($_GET["a30"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a30 = "'.temizle($_GET["a30"]).'"'; }
	if(temizle($_GET["a31"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a31 = "'.temizle($_GET["a31"]).'"'; }
	if(temizle($_GET["a32"]) !='') { $icdonanim .= ' and  ilan_icdonanim.a32 = "'.temizle($_GET["a32"]).'"'; }
	
	
	$disdonanim = '';
	if(temizle($_GET["b1"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a1 = "'.temizle($_GET["b1"]).'"'; }
	if(temizle($_GET["b2"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a2 = "'.temizle($_GET["b2"]).'"'; }
	if(temizle($_GET["b3"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a3 = "'.temizle($_GET["b3"]).'"'; }
	if(temizle($_GET["b4"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a4 = "'.temizle($_GET["b4"]).'"'; }
	if(temizle($_GET["b5"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a5 = "'.temizle($_GET["b5"]).'"'; }
	if(temizle($_GET["b6"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a6 = "'.temizle($_GET["b6"]).'"'; }
	if(temizle($_GET["b7"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a7 = "'.temizle($_GET["b7"]).'"'; }
	if(temizle($_GET["b8"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a8 = "'.temizle($_GET["b8"]).'"'; }
	if(temizle($_GET["b9"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a9 = "'.temizle($_GET["b9"]).'"'; }
	if(temizle($_GET["b10"]) !='') { $disdonanim .= ' and  ilan_disdonanim.a10 = "'.temizle($_GET["b10"]).'"'; }
	
	$cevreozellikleri = '';
	if(temizle($_GET["c1"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a1 = "'.temizle($_GET["c1"]).'"'; }
	if(temizle($_GET["c2"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a2 = "'.temizle($_GET["c2"]).'"'; }
	if(temizle($_GET["c3"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a3 = "'.temizle($_GET["c3"]).'"'; }
	if(temizle($_GET["c4"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a4 = "'.temizle($_GET["c4"]).'"'; }
	if(temizle($_GET["c5"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a5 = "'.temizle($_GET["c5"]).'"'; }
	if(temizle($_GET["c6"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a6 = "'.temizle($_GET["c6"]).'"'; }
	if(temizle($_GET["c7"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a7 = "'.temizle($_GET["c7"]).'"'; }
	if(temizle($_GET["c8"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a8 = "'.temizle($_GET["c8"]).'"'; }
	if(temizle($_GET["c9"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a9 = "'.temizle($_GET["c9"]).'"'; }
	if(temizle($_GET["c10"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a10 = "'.temizle($_GET["c10"]).'"'; }
	if(temizle($_GET["c11"]) !='') { $cevreozellikleri .= ' and  ilan_cevreozellikleri.a11 = "'.temizle($_GET["c11"]).'"'; }
	
	$altyapi = '';
	if(temizle($_GET["d1"]) !='') { $altyapi .= ' and  ilan_altyapi.a1 = "'.temizle($_GET["d1"]).'"'; }
	if(temizle($_GET["d2"]) !='') { $altyapi .= ' and  ilan_altyapi.a2 = "'.temizle($_GET["d2"]).'"'; }
	if(temizle($_GET["d3"]) !='') { $altyapi .= ' and  ilan_altyapi.a3 = "'.temizle($_GET["d3"]).'"'; }
	if(temizle($_GET["d4"]) !='') { $altyapi .= ' and  ilan_altyapi.a4 = "'.temizle($_GET["d4"]).'"'; }
	if(temizle($_GET["d5"]) !='') { $altyapi .= ' and  ilan_altyapi.a5 = "'.temizle($_GET["d5"]).'"'; }
	if(temizle($_GET["d6"]) !='') { $altyapi .= ' and  ilan_altyapi.a6 = "'.temizle($_GET["d6"]).'"'; }
	if(temizle($_GET["d7"]) !='') { $altyapi .= ' and  ilan_altyapi.a7 = "'.temizle($_GET["d7"]).'"'; }
	if(temizle($_GET["d8"]) !='') { $altyapi .= ' and  ilan_altyapi.a8 = "'.temizle($_GET["d8"]).'"'; }
	if(temizle($_GET["d9"]) !='') { $altyapi .= ' and  ilan_altyapi.a9 = "'.temizle($_GET["d9"]).'"'; }
	
	if($icdonanim != "") { $esitleme .= " and ilan_icdonanim.ilan_id = ilan_ticari.id"; }
	if($disdonanim != "") { $esitleme .= " and ilan_disdonanim.ilan_id = ilan_ticari.id"; }
	if($cevreozellikleri != "") { $esitleme .= "  and ilan_cevreozellikleri.ilan_id = ilan_ticari.id"; }
	if($altyapi != "") { $esitleme .= "  and ilan_altyapi.ilan_id = ilan_ticari.id"; }
	
if($icdonanim != "") { $ic_donanim_t = ",ilan_icdonanim"; }
if($disdonanim != "") { $dis_donanim_t = ",ilan_disdonanim"; }
if($cevreozellikleri != "") { $cevre_ozellikleri_t = ",ilan_cevreozellikleri"; }
if($altyapi != "") { $alt_yapi_t = ",ilan_altyapi"; }

$tablolar =$ic_donanim_t .' '. $dis_donanim_t .' '. $cevre_ozellikleri_t .' '. $alt_yapi_t; 

$kriterler =$esitleme .'  '.$tur.' '.$fiyat.' '.$birim.' '.$iller.' '.$ilceler.' '.$koyler.' '.$user.' '.$resim.' '.$tip.' '.$grup .' '. $ilan_no .' '.$uye.' '.$metrekare.' '.$oda.' '.$balkon.' '.$bahce.' '.$kullanim_durumu.' '.$yapi_durum.' '.$isinma_tipi.' '.$kullanimamaci.' '.$tapudurumu.' '.$icdonanim.' '.$disdonanim.' '.$cevreozellikleri.' '.$altyapi;
	
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
$_SESSION["tablolar"] = $tablolar;
}
/// echo "<br>".$_SESSION["kriter"];
$sayfadaki_kayit_sayisi = 20;
if(temizle($_GET["sayfa"]) == '') {$limit = "limit 0,".$sayfadaki_kayit_sayisi;}
if(temizle($_GET["sayfa"]) != '') { $limit = "limit ".temizle($_GET["sayfa"]-1)* $sayfadaki_kayit_sayisi .", ".$sayfadaki_kayit_sayisi." "; }


/// echo '<br>'.$limit;

	$vt->sql('SELECT ilan_ticari.* ,uyeler.id as uye_id, uyeler.uye_tipi as uye_tipi , uyeler.sirket as sirket, uyeler.temiz_ad as temiz_ad,  count(ilan_foto.ilan_id) as fotosay , ilan_tipi.tip as tip , ilan_tipi.grup_id FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi '.$_SESSION["tablolar"].' where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id '.$_SESSION["kriter"].' and ilan_ticari.onay not in (1,3) group by ilan_ticari.id   ')->sor();



$toplam_kayit =$vt->numRows();

/// echo "<br>".$toplam_kayit;
$vt->sql('SELECT ilan_ticari.* ,uyeler.id as uye_id, uyeler.uye_tipi as uye_tipi , uyeler.sirket as sirket, uyeler.temiz_ad as temiz_ad, count(ilan_foto.ilan_id) as fotosay , ilan_tipi.tip as tip , ilan_tipi.grup_id FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi '.$_SESSION["tablolar"].' where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id      '.$_SESSION["kriter"].'  and ilan_ticari.onay not in (1,3)    group by ilan_ticari.id    order by  ilan_ticari.onay DESC '.$siralama.' ,ilan_ticari.id  DESC  '. $limit .'')->sor();
////   ilan_ticari.onay DESC    ,ilan_ticari.id  DESC
/// echo "<br>".$vt->alSql();
	
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

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi= $vt->alTek();
		
$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$sehir = $vt->alTek();

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'"  ')->sor();
$ilce= $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'" ')->sor();
$mahalle= $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'"   ')->sor();
$foto = $vt->alTek();

$vt->sql('select grup_id from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi_grup = $vt->alTek();

$vt->sql('select adi from kullanim_durumu where id="'.$veri->kullanim_durumu.'"   ')->sor();
$kullanim_durumu= $vt->alTek();

$vt->sql('select adi from tapu_durumu where id="'.$veri->tapu_durum.'"   ')->sor();
$tapu_durumu= $vt->alTek();

/* $vt->sql('select * from ilce where ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
foreach( $veriler3 as $veri3 ) {	$ilce= $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'" ')->sor();
$veriler4 = $vt->alHepsi();
foreach( $veriler4 as $veri4 ) {	$mahalle= $veri4->mahalleAdi; }


$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'"   ')->sor();
$veriler5 = $vt->alHepsi();
foreach( $veriler5 as $veri5 ) {	$foto = $veri5->foto_adi; }

$vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$veriler6 = $vt->alHepsi();
foreach( $veriler6 as $veri6 ) {	$ilan_tipi_grup = $veri6->grup_id; }

$vt->sql('select * from kullanim_durumu where id="'.$veri->kullanim_durumu.'"   ')->sor();
$veriler7 = $vt->alHepsi();
foreach( $veriler7 as $veri7 ) {	$kullanim_durumu= $veri7->adi; }

$vt->sql('select * from tapu_durumu where id="'.$veri->tapu_durum.'"   ')->sor();
$veriler8 = $vt->alHepsi();
foreach( $veriler8 as $veri8 ) {	$tapu_durumu= $veri8->adi; } */

if($ilan_tipi_grup == 1 and temizle($_GET["liste"]) == "1") {
	
$ozellikler =
''.$veri->metrekare.' m&sup2; &nbsp;
'.$veri->oda_sayi.' Oda &nbsp;
'.$veri->salon_sayisi.' Salon &nbsp;
'.$veri->banyo_sayisi.' Banyo &nbsp;
'.$veri->bina_kat_sayisi.' Katlý Binanýn &nbsp;
'.$veri->bulundugu_kat.' Katý &nbsp;
Yapým Yýlý: '.$veri->yapim_yili;
							}
							

if($ilan_tipi_grup == 3 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$veri->toplam_metrekare.' m², <strong>Kullanýlabilir Metrekare:</strong> '.$veri->kullanilabilir_metrekare.' m²<br />
  <strong>Kullaným Durumu:</strong> '.$kullanim_durumu.'<br />';
							}

if($ilan_tipi_grup == 2 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$veri->toplam_metrekare.' m², <strong>Kullanýlabilir Metrekare:</strong> '.$veri->kullanilabilir_metrekare.' m²<br />
  <strong>Tapu Durumu:</strong> '.$tapu_durumu.'<br />';
							}

/////////////////////////////////
$vt->sql('select uye_tipi from uyeler where id= "'.$veri->uye_id.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$veri->uye_id."'")->sor(); 
if($vt->alTek() != "") { $gresim = '<center><img name="" src="http://'.$site.'/thumb.php?p=resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { $gresim = '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 $gresim =  '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ $gresim = ' <IMG border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }
/////////////////////////////////////////
if($veri->uye_tipi == 3) { $gsahip =' ';} 
if($veri->uye_tipi == 2) { $gsahip =' ';} 
if($veri->uye_tipi == 1) { $gsahip =' '; }


if($veri->birim == 1) {$gbirim = '&nbsp;TL'; }
if($veri->birim == 2) {$gbirim ='&nbsp;Euro'; }
if($veri->birim == 3) { $gbirim ='&nbsp;USD'; }
if($veri->birim == 4) { $gbirim ='&nbsp;GBP'; }

 if($veri->uye_tipi == 1)
 {  $gperma = '<a href="?action=arama&uye='.$veri->uye_id.'&liste=1">Emlak&ccedil;&#305;n&#305;n Di&#287;er &#304;lanlar&#305;</a>'; }
 else if($veri->uye_tipi == 3 )
 {  $gperma = '<a href="?action=arama&uye='.$veri->uye_id.'&liste=1">Müteahhitin Di&#287;er &#304;lanlar&#305;</a>'; }
					  else
					  { $gperma = ''; }
							
/*  if($veri->uye_tipi == 1) {
						  $gperma = '<a href="http://'.$veri->temiz_ad.'.'.$site.'"> 
                        Diðer Ýlanlarý</a>';
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
					  <img src="tema/img/disc.gif" width=15  height=18 border=0 alt="Takibe / Hafýzýya Al">
					  </A>
						</div>
						
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
                  
                  
                  </a><BR></DIV></TD>
  <TD height=20 vAlign=top width="75%" class=tdliste><FONT 
                  color=#003399 size=2><STRONG><A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'
                  
                  </A></STRONG> </FONT>
										 '. 
										$gsahip
										 .'
                </TD>
                <TD vAlign=top rowSpan=2 width=75 class=tdliste noWrap>
                  <DIV align=center><FONT color=#003399><STRONG>
				  '. ondalik($veri->fiyat).' '.
				 $gbirim
					 .'
                  </FONT> <BR><h6>Ýlan 
                  Tarihi:<br>'. $veri->bas_tarihi  .'</h6> </DIV></TD></TR>
              <TR>
                <TD vAlign=top><STRONG>'. $ozellikler .'<BR>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD width="50%">&nbsp;</TD>
                      <TD width="50%" class=tdliste>
                        <DIV align=center>&nbsp;&nbsp;&nbsp;
                      '.
					 $gperma
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
				
  <TD class=tdliste>&nbsp;'.$veri->bas_tarihi.'</TD>
<TD class=tdliste><DIV align=center>'.$veri->oda_sayi.'</DIV></TD>
<TD class=tdliste><DIV align=center>'.$veri->salon_sayisi.'</DIV></TD>
<TD class=tdliste><DIV align=center>'.$veri->yatak_odasi_sayisi.'</DIV></TD>
<TD class=tdliste noWrap><DIV align=center>'.$veri->metrekare.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($veri->fiyat).' '.$gbirim.'</DIV></TD>
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
  <TD class=tdliste>&nbsp;'.$veri->bas_tarihi.'</TD>
<TD class=tdliste noWrap><DIV align=center>'.$veri->metrekare.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($veri->fiyat).' '.$gbirim.'</DIV></TD>
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
  <TD class=tdliste>&nbsp;'.$veri->bas_tarihi.'</TD>
<TD class=tdliste noWrap><DIV align=center>'.$veri->metrekare.' m²</DIV></TD>
<TD class=tdliste><DIV align=right>'.ondalik($veri->fiyat).' '.$gbirim.'</DIV></TD>
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
echo "<center><h5>".sayfala(temizle($_GET["sayfa"]),$toplam_kayit,$sayfadaki_kayit_sayisi,'action=arama&liste='.$liste.'')."</h5></center>";	
?>




            
           <HR color=#cccccc SIZE=1 width="100%" noShade></FONT></TD>
         
        </TR>
        </TBODY></TABLE>