<style type="text/css">
<!--
.stil1 {
	font-size: 12px;
	color: #666666;
}
.stil3 {
	font-size: 14px
}
.stil5 {color: #A71335}
.stil6 {color: #006600}
.stil7 {color: #A40E31}
.stil10 {color: #AE2543}
.stil11 {
	color: #A22340;
	font-weight: bold;
}
.stil15 {font-weight: bold}
.stil16 {font-weight: bold}
.stil17 {font-weight: bold}
.stil18 {font-weight: bold}
.stil19 {font-weight: bold}
.stil21 {font-weight: bold}
.stil24 {font-weight: bold}
.stil26 {font-weight: bold}
.stil27 {color: #A22340}
.stil29 {color: #009933}
.stil30 {color: #0000CC}
.stil33 {color: #FF9933}
-->
</style>

<div id="sol">
<div id="ana_ikili">
<table width="75%" border="0">

  <tr>
  <td  align="left" valign="top">



  
   <!--hyzly arama bölümü ba?alngyç -->

 
        
<table  border="1">
  <tr>
    <td><?php include("sabit/hizli_arama.php"); ?></td>
  </tr>
</table>

<?php 
	$vt->sql('select * from reklam where yer=17 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=18 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=19 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=20 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>

  <!--hyzly arama biti? --> 
  </td>
    <td width="75%" align="left" valign="top">
    
   <div id="detayli_anasayfa">
        <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<!--<table style="width:98%" height="207" border="0">
  <tr>
    <td height="161" colspan="3" align="left" valign="top"><p align="center" class="stil1 stil3">T&Uuml;RK&#304;YE'N&#304;N
        EN &#304;&#350;LEVSEL VE  ARADI&#286;INIZI HEMEN<br /> 
        S&#304;ZE VEREN  
        EMLAK S&#304;TES&#304;NE HO&#350; GELD&#304;N&#304;Z.<br />
&Uuml;CRETS&#304;Z &Uuml;YEL&#304;K VE EMLAK EKLEME &#304;MKANLARI &#304;&Ccedil;&#304;N <br />
UYGUN &Uuml;YEL&#304;K T&#304;P&#304;N&#304; SE&Ccedil;EREK 
<br />
SE&Ccedil;K&#304;N &Uuml;YELER&#304;M&#304;Z ARASINDAK&#304; YER&#304;N&#304;Z&#304; ALIN. </p>
      <p align="center" class="stil1 stil3 stil7">EmlakNet.NET Y&ouml;netimi</p></td>
  </tr>
  
  <tr>
    <td width="37%" >
      <div align="right">
        <a href="index.php?action=giris"><img src="img/uye_ol.jpg" width="166" height="32" border="0" /></a>
        </div></td>
    <td width="27%" height="40"><div align="center"><a href="index.php?action=yeni_emlakci"><img src="img/kurumsal_uye.jpg" width="166" height="32" border="0" /></a></div></td>
    <td width="36%"><div align="left"><a href="index.php?action=yeniuye"><img src="img/bireysel_uye.jpg" width="166" height="32" border="0" /></a></div></td>
  </tr>
</table> -->
<table width="95%" border="0">
  <tr>
    <td><?php $vt->sql('select * from reklam where yer=4 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=6 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=7 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
  </tr>
</table>

</div>
</div>
</div>
        </div> 
    
    
   <div id="hizli_ara_anasayfa">
                 <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
<!--hyzly arama bölümü ba?alngyç -->
<table style="width:98%" border="0" cellpadding="5" cellspacing="0">

  <tr align="center" valign="middle">
    <td valign="top">
      <!-- @Start : Konut -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=194>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/konut.jpg" width="50" height="50" 
            align=center class=pointer "></TD>
              <TD><SPAN class=pointer stil29 id=title_green "><B>KONUT</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      src="tema1/img/line_green_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_green.gif" height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=1&amp;liste=1">Sat&#305;l&#305;k</A>
        
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema1/img/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=1&amp;liste=1">Kiral&#305;k</A> 
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=1&amp;liste=1">T&uuml;m 
                Konutlar</A>  
                 <?php 
				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>         
                </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_greenbar_173px.gif"> </DIV><!-- @Start : Ticari -->      </td>
    <td valign="top">
      <!-- @Start : Ticari -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=190>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/main_ev2.jpg" width="50" height="50" 
            align=center class=pointer 
            "></TD>
              <TD><SPAN class=pointer stil30 id=title_blue 
            "><B>T&#304;CARI</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema1/img/line_blue_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=2&amp;liste=1">Sat&#305;l&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema1/img/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=2&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=2&amp;liste=1">T&uuml;m Ticari</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> 
               </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_bluebar_173px.gif">      </DIV>
      <!-- @Start : Yeni Projeler -->      </td>
    <td valign="top">
      
      
      <DIV 
      style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none" 
      class="realType h100 float marRight5px h150px">
        <TABLE width=193>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/main_ev3.jpg" width="50" height="50" 
            align=center class=pointer 
           "></TD>
              <TD><SPAN class=pointer stil33 id=title_orange 
            "><B>ARSA/TARLA</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema1/img/line_yellow_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=3&amp;liste=1">Sat&#305;l&#305;k</A>
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema1/img/arrow_yellow.gif"  height="5" width="4"> <A 
        style="LETTER-SPACING: 0.05em" 
        href="index.php?action=arama&amp;tip=0&amp;grup=3&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3'   ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=3&amp;liste=1">T&uuml;m Arsalar</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3'   ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>    
             </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_yellowbar_173px.gif">      </DIV>      </td>
  </tr>
</table>


<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye */
google_ad_slot = "6345695723";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>



 </div>
</div>
</div>
        </div> 
   
   
   
   
   
   <div id="vitirin_anasayfa">
                 <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
<!--vitrin ilanlar ba?alngycy -->

<TABLE border=0 cellSpacing=0 cellPadding=0 style="width:98%" 
            align=center>
              <TBODY>
                            <TR>
                <TD align="left" vAlign=top>
                
                   <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag stil10"><br />
        <span class="stil11">V&#304;TR&#304;N &#304;LANLAR</span></div>
      </div>      </TD>
                </TR>
              <TR>
                <TD vAlign=top>
                  
                  
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

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $tablo = '  <TABLE style="width:98%" border=0   align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex">
     <IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><br />';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "")
{ $tablo .= '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { 
$tablo .= '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 $tablo .= '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ $tablo .= ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

$tablo .= ' <A  title="'.$ilan_basligi .'"  href="index.php?action=detail&amp;id='.$veri->id.'">'.$ilan_basligi.'</A><BR />'.ondalik($veri->fiyat)."&nbsp;".$birim.'</DIV> </TD></TR></TBODY></TABLE><BR />';
 } 
 
 $data_vitrin[$x] = $tablo;
	 $x++;
				}
	echo resim_listele(5,0,0,$data_vitrin);  
	 ?>                  
                  
                  
                  
                </TD>
                </TR>
              </TBODY>
</TABLE>





<!--vitrin ilanlar bitimi -->
</div>
</div>
</div></div>    


<div id="detayli_anasayfa">
        <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<table width="95%" border="0">
  <tr>
    <td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknettürkiye anasayfa orta */
google_ad_slot = "8853527050";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


<?php $vt->sql('select * from reklam where yer=8 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=9 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=10 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=11 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
  </tr>
</table>

</div>
</div>
</div>
        </div>   



</td>
  
  </tr>
</table>
</div>

        <div id="yeniler">
                <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
  <table width="99%" border="0">
    <tr>
      <td width="975"><table border="0" cellspacing="0" cellpadding="0" width="100%" 
            align="center">
     <tbody>
       <tr>
         <td align="left" valign="top"><div class="baslik">
           <div class="baslik_sol"></div>
           <div class="baslik_sag">
             <div align="left" class="stil11"><br />
               YEN&#304; &#304;LANLAR</div>
           </div>
         </div></td>
       </tr>
       <tr>
         <td valign="top" class="stil15"><?php 
				
				
				
		$x=0;
			for($i=1;$i <= $yeni_ilan_sayisi; $i++){
				$ii = $i-1;
				
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id DESC  limit ".$ii.",1 ")->sor(15);


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
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 $table1 = '<table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"  height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a title="'.$ilan_basligi.'"  href="index.php?action=detail&amp;id='.$veri->id.'">';


if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "") { 
$table1 .= '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { 
$table1 .= '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 $table1 .= '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ $table1 .= ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }
$table1 .= '<img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
'.$ilan_basligi.'</a><br /> '.ondalik($veri->fiyat)."&nbsp;".$birim.'<br /> </div></td>
  </tr></tbody></table><br />';
 }
		   
		 $data_yeni[$x] = $table1;
		 $x++;
		   }
		   
		    echo resim_listele(5,0,0,$data_yeni); 
		   
		   // bitis ?>
         </td>
         </tr>
     </tbody>
   </table></td>
      <td width="211" align="left" valign="top" class="stil21"><table width="87%" border="0" align="left">
        <tr>
          <td align="left" valign="top" bgcolor="#FFFFFF">
	<?php include("sabit/sayac.php"); ?>	  
	<?php $vt->sql('select * from reklam where yer=12 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>	  
<?php $vt->sql('select * from reklam where yer=13 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>		  
		  
<?php 
	$vt->sql('select * from reklam where yer=14 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=15 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=16 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
              <br />
         </td>
        </tr>
      </table></td>
    </tr>
  </table>
  <strong>
<!--en yeniler bölüm ba?langycy -->
<!--en yeniler bölüm biti?i -->
    </strong></div>
</div>
</div>
        </div>
        <strong><br />
        <br />     
        </strong>
        <div class="stil24" id="turler_anasayfa">
          <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<table width="97%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="left">
                               <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil27">&#304;LAN KATEGOR&#304;S&#304;</span></div>
      </div>      </td>
    </tr>
    <tr>
      <th colspan="5"><span class="stil27">&Ouml;zel / Konut Gayrimenkul   &#304;lanlar&#305;</span></th></tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
      
     <?php 
 $vt->sql("select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ")->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>            </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><hr /></td>
    </tr>
  <tr>
    <th colspan="5" valign="top"><span class="stil27">Ticari / &#304;&#351;yeri Gayrimenkul</span></th>
    </tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,10  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 10,10  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 20,10  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>     
  
       <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,8  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
       <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 8,10  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 18,10  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><hr /></td>
    </tr>
  <tr>
    <th colspan="5" valign="top"><span class="stil27">Arsa / Arazi   &#304;lanlar&#305;</span></th>
    </tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,3  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id=3  group by ilan_tipi.adi limit 6,3  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    </td>
    <td align="left" valign="top" nowrap="nowrap">   
    
          <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?></td>
    <td align="left" valign="top" nowrap="nowrap">              <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,5  ')->sor(15);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> </td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top" nowrap="nowrap"><hr /></td>
    </tr>
</table>
</div>
</div>
</div>
        </div>
        <strong><br />
        <br />       
               </strong>
        <div class="stil26" id="emlakcilar">
          <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">

<table width="97%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="left">
    
                           <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil27">EMLAK&Ccedil;ILAR</span></div>
      </div>      </td>
    </tr>
  <tr>
    <td>
    <?php
/* 	SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 0,10 */
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 0,10  ")->sor(15);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
/* <li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>	 */
	}
	
	?>    </td>
    <td>    <?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1'  group by uyeler.id ORDER BY RAND() LIMIT 10,10  ")->sor(15);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
	}
	
	?></td>
    <td>    <?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1'  group by uyeler.id ORDER BY RAND() LIMIT 20,10   ")->sor(15);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
	}
	
	?></td>
  </tr>
</table>
</div>
</div>
</div>
        </div>  
</div>
     
