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
    <td><?php include("sabit/hizli_arama2.php"); ?></td>
  </tr>
</table>





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
    <td><?php $vt->sql('select * from reklam where yer=4 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=6 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
   <td><?php $vt->sql('select * from reklam where yer=7 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
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
    
    
    
   
   
   
   
   
<div id="vitirin_anasayfa">
                 <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
<!--vitrin ilanlar ba?alngycy -->

<TABLE border=0 cellSpacing=0 cellPadding=0 style="width:98%" 
            align=center>
              <TBODY>
                            <TR>
                <TD colspan="4" align="left" vAlign=top>
                
                   <div class="baslik">
      
      <div class="baslik_sag stil10"><br />
        <span class="stil11">V&#304;TR&#304;N &#304;LANLAR</span></div>
      </div>      </TD>
                </TR>
              <TR>
                <TD vAlign=top width="20%">
                
                            
  <?php 
  		$vt->sql("select id from ilan_ticari where onay='4' ")->sor();
				$veriler = $vt->alHepsi();
				foreach($veriler as $veri) {
				$rastgele[]= $veri->id;
				}
				
				$rastgele=array_flip($rastgele);
				$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 1,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>              
  <TABLE style="width:98%" border=0   align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex">
     <IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><br />
                       <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();


if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?>
                        
          
                     <A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>"><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV>
                        
                        
    </TD></TR></TBODY></TABLE><BR />
     <?php } ?>                  
                        
                        
                        
                        
  <?php 
  				$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

//$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 4,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                        
                
                  <TABLE style="width:98%" border=0   align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                              <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?></TD>
                <TD vAlign=top width="20%">
                  
                           <?php 
						   				$rastgele_id = array_rand($rastgele, 1);
										unset($rastgele[$rastgele_id]);
										
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 1,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>             
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                              <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?>  
                  
                  
         
                          <?php
						  				$rastgele_id = array_rand($rastgele, 1);
										unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 5,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                     
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                             <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?></TD>
                <TD vAlign=top width="20%">
                           <?php 
						   				$rastgele_id = array_rand($rastgele, 1);
										unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();
/// $vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 2,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>           
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                             <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?>  
                         <?php 
						 				$rastgele_id = array_rand($rastgele, 1);
										unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 6,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>           
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                             <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?></TD>
                <TD vAlign=top width="20%">
                
                
                
                
              <?php
			  				$rastgele_id = array_rand($rastgele, 1);
							unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 3,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                  
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                             <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR />
                       
                        </DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?>     
                
   <?php
   				$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 7,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor();
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                        
                
                  <TABLE style="width:98%" border=0  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 src="tema/img/spacer.gif" alt=""  width=1  height=5><BR /><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                                             <?php
$vt->sql('select uye_tipi from uyeler where id= "'.$uye_no.'" ')->sor(); 
$uye_tipi = $vt->alTek();

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(); $foto_adi = $vt->alTek();

if($vt->alTek() == 0 ) {
// if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(); 
if($vt->alTek() != "") { echo '<center><img name="" src="resimler/'.$vt->alTek().'" width="100" height="75" alt="" border=0 /></center>'; } else { echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; }	
										}

if($uye_tipi == 2 ) {
 echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />'; 	
					}

 }

else 

{ echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; }

?><?php echo $ilan_basligi; ?></A><BR />
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?></DIV></TD></TR></TBODY></TABLE><BR />
     <?php } ?></TD>
              </TR>
              </TBODY>
</TABLE>





<!--vitrin ilanlar bitimi -->
</div>
</div>
</div></div>
   <table width="97%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="left"><div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil27">EMLAK&Ccedil;ILAR</span></div>
    </div></td>
  </tr>
  <tr>
    <td><?php
/* 	SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 0,10 */
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 0,10  ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
/* <li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>	 */
	}
	
	?></td>
    <td><?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1'  group by uyeler.id ORDER BY RAND() LIMIT 10,10  ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
	}
	
	?></td>
    <td><?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 20,10   ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
	}
	
	?></td>
  </tr>
</table>
   <table width="97%" border="0" cellpadding="0" cellspacing="0">
     <tr>
       <td colspan="3" align="left"><div class="baslik">
         <div class="baslik_sol"></div>
         <div class="baslik_sag"><br />
           <span class="stil27">M&Uuml;TAH&#304;T F&#304;RMALAR</span></div>
       </div></td>
     </tr>
     <tr>
       <td><?php
/* 	SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 0,10 */
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='3' group by uyeler.id ORDER BY RAND() LIMIT 0,10  ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'</li>';
/* <li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>	 */
	}
	
	?></td>
       <td><?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='3' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 10,10  ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>';
	}
	
	?></td>
       <td><?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='3' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 20,10   ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>';
	}
	
	?></td>
     </tr>
   </table>
   <table border="0" cellspacing="0" cellpadding="0" width="100%" 
            align="center">
     <tbody>
       <tr>
         <td colspan="5" align="left" valign="top"><div class="baslik">
           <div class="baslik_sol"></div>
           <div class="baslik_sag">
             <div align="left" class="stil11"><br />
               YEN&#304; &#304;LANLAR</div>
           </div>
         </div></td>
       </tr>
       <tr>
         <td width="20%" valign="top" class="stil15"><?php 
				
								
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 0,1 ")->sor();	

//$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 5,1 ")->sor();
/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 5,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' and id='".$rastgele1_id."' ")->sor();
/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 5,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?></td>
         <td width="20%" valign="top" class="stil16"><?php
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 1,1 ")->sor();
/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 1,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 6,1 ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 6,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' and id='".$rastgele1_id."' ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 6,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?></td>
         <td width="20%" valign="top" class="stil17"><?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 2,1 ")->sor();
//// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 2,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 7,1 ")->sor();

//// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 7,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' and id='".$rastgele1_id."' ")->sor();

//// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 7,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?></td>
         <td width="20%" valign="top" class="stil18"><?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 3,1 ")->sor();
///$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 3,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 8,1 ")->sor();

/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 8,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' and id='".$rastgele1_id."' ")->sor();

/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 8,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?></td>
         <td align="left" valign="top" class="stil19"><?php
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 4,1 ")->sor();
//// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 4,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit 9,1 ")->sor();

/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 9,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?>
           <?php 
										
$vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' and id='".$rastgele1_id."' ")->sor();

/// $vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 9,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor();
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
           <table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
                  align="center">
             <tbody>
               <tr>
                 <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                   <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                     <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$foto_adi = $vt->alTek();

					  if($vt->alTek() == 0 ) {
// if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><BR />';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR />'; 
						 }
						  ?>
                     <img border="0" src="tema/img/spacer.gif" alt="" width="1" height="5" /><br />
                     <?php echo $ilan_basligi; ?></a><br />
                   <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                 </div></td>
               </tr>
             </tbody>
           </table>
           <br />
           <?php } ?></td>
       </tr>
     </tbody>
   </table>
<div id="detayli_anasayfa">
  <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<table width="95%" border="0">
  <tr>
    <td><?php $vt->sql('select * from reklam where yer=8 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=9 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}
?></td>
    <td><?php $vt->sql('select * from reklam where yer=10 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
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
<div class="innerdiv"><strong>
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
 $vt->sql("select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ")->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,10  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 10,10  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 20,10  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>     
  
       <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,8  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 8,10  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 18,10  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,3  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id=3  group by ilan_tipi.adi limit 6,3  ')->sor();
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
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&amp;liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?></td>
    <td align="left" valign="top" nowrap="nowrap">              <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,5  ')->sor();
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
<div class="innerdiv"></div>
</div>
</div>
        </div>  
</div>
     
