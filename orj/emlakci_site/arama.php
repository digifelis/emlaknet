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





<TABLE 
      
      border=0 cellSpacing=2 cellPadding=2 width="100%" align=center>
        <TBODY>
        
        <TR>
<td valign="top" width="211"><?php include("hizli_arama2.php"); ?></td>        
          <TD valign="top" width="783">
            <HR color=#cccccc SIZE=1 width="100%" noShade>

            
    <?php 
	

	
	
	
	 		$fiyat1 = 0;
	 		$fiyat2 = 100000000;
	if(temizle($_GET["tur"]) !='') { $tur = ' and  ilan_tipi_id = "'.temizle($_GET["tur"]).'"'; }
	
	if(temizle($_GET["fiyat_alt"]) !='') { $fiyat1 = temizle($_GET["fiyat_alt"]); } 
	if(temizle($_GET["fiyat_ust"]) !='') { $fiyat2 = temizle($_GET["fiyat_ust"]); }
			$fiyat = ' and ilan_ticari.fiyat  between "'.$fiyat1.'" and "'.$fiyat2.'" ';
	
	if( temizle($_GET["fiyat_alt"]) != '' and temizle($_GET["fiyat_ust"]) != '' ) 
	{
	if(temizle($_GET["birim"]) !='') { $birim = ' and  ilan_ticari.birim = "'.temizle($_GET["birim"]).'"'; }
	}
	
	if(temizle($_GET["iller"]) !='') { $iller = ' and  ilan_ticari.il= "'.temizle($_GET["iller"]).'"'; }
	if(temizle($_GET["ilceler"]) !='') { $ilceler = ' and  ilan_ticari.ilce = "'.temizle($_GET["ilceler"]).'"'; }
	if(temizle($_GET["koyler"]) !='') { $koyler = ' and  ilan_ticari.koy = "'.temizle($_GET["koyler"]).'"'; }
	
	if(temizle($_GET["user"]) == 0) { $user = ''; }
	if(temizle($_GET["user"]) == 2) { $user = ' and uyeler.uye_tipi = '.temizle($_GET["user"]).''; }
	
	
	
	if(temizle($_GET["resim"]) == 0) { $resim = ""; }
	if(temizle($_GET["resim"]) == 1) { $resim = " and ilan_foto.ilan_id=ilan_ticari.id "; }
	if(temizle($_GET["resim"]) == 2) { $resim = " and ilan_foto.ilan_id != ilan_ticari.id "; }

	
	if(temizle($_GET["tip"]) == '0') { $tip = " and tip='".temizle($_GET["tip"])."' "; }
	if(temizle($_GET["tip"]) == '1') { $tip = " and tip='".temizle($_GET["tip"])."' "; }

	if(temizle($_GET["grup"]) == 1) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	if(temizle($_GET["grup"]) == 2) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	if(temizle($_GET["grup"]) == 3) { $grup = " and grup_id='".temizle($_GET["grup"])."' "; }
	
	$kriterler = $tur.' '.$fiyat.' '.$birim.' '.$iller.' '.$ilceler.' '.$koyler.' '.$user.' '.$resim.' '.$tip.' '.$grup;
	
/// echo $kriterler;
if(temizle($_GET["sayfa"]) == "") {
$_SESSION["kriter"] = $kriterler;
}
/// echo "<br>".$_SESSION["kriter"];
$sayfadaki_kayit_sayisi = 20;
if(temizle($_GET["sayfa"]) == '') {$limit = "limit 0,".$sayfadaki_kayit_sayisi;}
if(temizle($_GET["sayfa"]) != '') { $limit = "limit ".temizle($_GET["sayfa"]-1)* $sayfadaki_kayit_sayisi .", ".$sayfadaki_kayit_sayisi." "; }


/// echo '<br>'.$limit;


$vt->sql('SELECT ilan_ticari.id  FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id   and uyeler.id="'.$_SESSION["emlakci"].'"  '.$_SESSION["kriter"].' and ilan_ticari.onay not in (1,3)  group by ilan_ticari.id   ')->sor();


/*
	$vt->sql('SELECT ilan_ticari.* , uyeler.uye_tipi as uye_tipi , uyeler.sirket as sirket,  count(ilan_foto.ilan_id) as fotosay , ilan_tipi.tip as tip , ilan_tipi.grup_id FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id   and uyeler.id="'.$_SESSION["emlakci"].'"  '.$_SESSION["kriter"].'  group by ilan_ticari.id   ')->sor();

*/

///$toplam_kayit =$vt->numRows();

 echo "<br>".$toplam_kayit;
$vt->sql('SELECT ilan_ticari.id, ilan_ticari.il ,ilan_ticari.ilce,ilan_ticari.koy,ilan_ticari.ilan_tipi_id,ilan_ticari.kullanim_durumu,ilan_ticari.tapu_durum,ilan_ticari.toplam_metrekare,ilan_ticari.fiyat,ilan_ticari.birim,ilan_ticari.oda_sayi,ilan_ticari.salon_sayisi ,ilan_ticari.kullanilabilir_metrekare,ilan_ticari.metrekare,ilan_ticari.banyo_sayisi,ilan_ticari.bina_kat_sayisi,ilan_ticari.bulundugu_kat,ilan_ticari.yapim_yili,ilan_ticari.bas_tarihi, uyeler.uye_tipi as uye_tipi , uyeler.sirket as sirket,  count(ilan_foto.ilan_id) as fotosay , ilan_tipi.tip as tip , ilan_tipi.grup_id FROM ilan_ticari, uyeler , ilan_foto,ilan_tipi where ilan_ticari.uye_id = uyeler.id and ilan_ticari.ilan_tipi_id=ilan_tipi.id    and uyeler.id="'.$_SESSION["emlakci"].'"  '.$_SESSION["kriter"].' and ilan_ticari.onay not in (1,3)  group by ilan_ticari.id   order by ilan_ticari.onay DESC ,ilan_ticari.id DESC    '. $limit .'')->sor();


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




 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 ){ $ilan_tipi= $veri1->adi; }
		
$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
foreach( $veriler2 as $veri2 ) {	$sehir =  $veri2->sehiradiUpper; }
	
$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$veriler3 = $vt->alHepsi();
foreach( $veriler3 as $veri3 ) {	$ilce= $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'"  and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"  ')->sor();
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
foreach( $veriler8 as $veri8 ) {	$tapu_durumu= $veri8->adi; }



if($ilan_tipi_grup == 1 and temizle($_GET["liste"]) == "1") {

$ozellikler =
''.$veri->metrekare.' m&sup2;&nbsp;
'.$veri->oda_sayi.' Oda&nbsp;
'.$veri->salon_sayisi.' Salon&nbsp;
'.$veri->banyo_sayisi.' Banyo&nbsp;
'.$veri->bina_kat_sayisi.' Katlý Binada&nbsp;
'.$veri->bulundugu_kat.'. Kat&nbsp;
Yapým Yýlý: '.$veri->yapim_yili;
			}
							

if($ilan_tipi_grup == 3 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$veri->toplam_metrekare.' m², <strong>Kullanýlabilir   Metrekare:</strong> '.$veri->kullanilabilir_metrekare.' m²<br />
  <strong>Kullaným Durumu:</strong> '.$kullanim_durumu.' ';
 
							}

if($ilan_tipi_grup == 2 and temizle($_GET["liste"]) == "1") {
	
$ozellikler = '<strong>Toplam Metrekare:</strong> '.$veri->toplam_metrekare.' m², <strong>Kullanýlabilir   Metrekare:</strong> '.$veri->kullanilabilir_metrekare.' m²<br />
  <strong>Tapu Durumu:</strong> '.$tapu_durumu.' ';


}

/* if($foto != "") { 			
 $gresim = ' <img   alt="'.$ilan_tipi.' '.$sehir.' '.$ilce.' '.$mahalle.'" 
                  src="http://'.$site.'/thumb.php?p=resimler/'.$foto.'&w=100&h=75"  border=0  />';
				  
				  } else {  $gresim = ' <img   alt="'.$ilan_tipi.' '.$sehir.' '.$ilce.' '.$mahalle.'" 
                  src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" border=0  />';
				  } */
////////////////////////////////////
$vt->sql('select uye_tipi from uyeler where id= "'.$_SESSION['emlakci'].'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$_SESSION['emlakci']."'")->sor(); 
if($vt->alTek() != "") { $gresim = '<center><img name="" src="http://'.$site.'/thumb.php?p=resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { $gresim = '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; }	
										}

if($uye_tipi == 2 ) {
 $gresim =  '<img border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/nopic100x60.gif&w=100&h=75">'; 	
					}

 }

else 

{ $gresim = ' <IMG border=0 alt="'.$ilan_basligi.'" src="http://'.$site.'/thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75">'; }

////////////////////////////////





if($veri->uye_tipi == 2) { $gsahip ='( SAHIBINDEN )';} 
if($veri->uye_tipi == 1) { $gsahip =' ( EMLAKÇIDAN )'; }


if($veri->birim == 1) {$gbirim = '&nbsp;TL'; }
if($veri->birim == 2) {$gbirim ='&nbsp;Euro'; }
if($veri->birim == 3) { $gbirim ='&nbsp;USD'; }
if($veri->birim == 4) { $gbirim ='&nbsp;GBP'; }

 if($veri->uye_tipi ==1) {
						  $gperma = '<a href="http://'.$veri->temiz_ad.'.'.$site.'">Emlak&ccedil;ýnýn 
                        Diðer Ýlanlarý</a>';
					  }
							
							
							
if(temizle($_GET["liste"]) == "1") {

$yazdir = ' <TABLE border=0 cellSpacing=1 cellPadding=1 width="100%" style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
            bgColor=#c6e38b align=center >
           
              <TR>
                <TD vAlign=top rowSpan=2 width=15>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
                  
                  
                   
                    <TR>
                      <TD><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5></TD></TR>

                      <TD><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5></TD></TR>
</TABLE>
					  </TD>
                <TD vAlign=top rowSpan=2 width=100>
             
                  <DIV style="POSITION: relative" align=center>
                  <A 
                  title="'. $ilan_tipi.' '.$sehir.' '.$ilce.' '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  
                 '. $gresim	  .'
                  
                  
                  </a></DIV></TD>
  <TD height=20 vAlign=top width="75%" class=tdliste><FONT 
                  color=#003399 size=2><STRONG><A style="TEXT-DECORATION: none" 
                  title="'. $ilan_tipi.' - '.$sehir.'- '.$ilce.'- '.$mahalle .'" 
                  href="index.php?action=detail&id='. $veri->id .'">
                  '. $ilan_tipi.' - '.$sehir.' - '.$ilce.' - '.$mahalle .'
                  
                  </A></STRONG> </FONT>
										
                </TD>
                <TD vAlign=top rowSpan=2 width=100 class=tdliste noWrap>
                  <DIV align=center><FONT color=#003399><STRONG>
				  '. ondalik($veri->fiyat).' '.
				 $gbirim
					 .'
                  </FONT> <BR>
				  <FONT  size=2>Ýlan Tarihi:<br>'. date("d-m-Y",strtotime($veri->bas_tarihi)) .' </font>
				  </DIV></TD></TR>
              <TR>
                <TD vAlign=top><STRONG>'. $ozellikler .'
                 
			
			</TD></TR></TABLE>
            <HR color=#cccccc SIZE=1 width="100%" noShade> ';
}




			echo $yazdir;
			
						
	?>
            
           

<?php 

} 

/// pager yazisi gelecek
} else { echo "ARADI&#286;INIZ KR&#304;TERLERE GÖRE SONUÇ BULUNAMADI."; }



 $liste = temizle($_GET["liste"]);
echo "<center><h5>".sayfala(temizle($_GET["sayfa"]),$toplam_kayit,$sayfadaki_kayit_sayisi,'action=arama&liste='.$liste.'')."</h5></center>";	
?>




            
            <HR color=#cccccc SIZE=1 width="100%" noShade></FONT></TD></TR></TBODY></TABLE>