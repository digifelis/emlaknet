<table width="100%" border="0">
  <tr>
    <td align="center">
    <?php $vt->sql('select * from reklam where yer=14 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod;
}

?>

    </td>
  </tr>
</table>

<?php
if(temizle($_GET["action"]) != "" ) {
?>	
	
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
            align=center>
              <TBODY>
                            <TR>
                <TD colspan="5" align="left" vAlign=top>
                
                   <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        V&#304;TR&#304;N &#304;LANLAR</div>
      </div>   
                
                
      
      
      </TD>
                </TR>
              <TR>
                <TD vAlign=top width="25%">
       
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

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
       
                
                         
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=122 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR>
                        

                
                        
                      <?php
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
					  if($veri->foto == "") {
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						  } else {
                        
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  


						  ?>
                        
                      <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>"><?php echo $ilan_basligi; ?></A><BR><?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>                  
                        
                        
                        
                        
                       </TD>
                <TD vAlign=top width="25%">
                  
                          <?php 
	$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                 
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
					 if($veri->foto == "") {
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						  } else {
                        
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  


						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR><?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  
                  
                  
         
                         </TD>
                <TD vAlign=top width="25%">
                          <?php 
	$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                 
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
					   if($veri->foto == "") {
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						  } else {
                        
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  


						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR><?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  
                        </TD>
                <TD vAlign=top width="25%">
                
                
                
                
              <?php 
	$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                 
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
					 if($veri->foto == "") {
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						  } else {
                        
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  


						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR><?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>     
                
               
                
                
                
                
                
                
                
                </TD>
                <TD vAlign=top width="25%">
                
                
                
                
              <?php 
	$rastgele_id = array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
$vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<BR />".$ilan_il."<BR />".$ilan_ilce."<BR />".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                 
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
					 if($veri->foto == "") {
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						  } else {
                        
  echo '<IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  


						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR><?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>     
                
               
                
                
                
                
                
                
                
                </TD>
              </TR>

              </TBODY>
</TABLE>  
<p>
  <?php	
}
?>
  </div>
 
 
 
 
 
 
 
 
 
<div id="menu">
  
	
			<div id="menucase">
			
	<div id="stylefour">
<ul>
	<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> >Ana Sayfa</a></li>
	<li><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?> >Konut Ýlanlarý</a></li>
	<li><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?> >Ýþyeri Ýlanlarý</a></li>
	<li><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?> >Arsa/Tarla Ýlanlarý</a></li>
    <li><a href="index.php?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlakçý Listesi</a></li>
     <li><a href="index.php?action=mutahit_liste" <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="current"';} ?> >Mütahit Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	<li><a href="?action=giris" title="" <?php if(temizle($_GET["action"]) == "giris") { echo 'class="current"'; } ?> >Üye Giriþi</a></li>
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >Üye Ol</a></li> 
    <li><a href="index.php?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >Ýletiþim</a></li> 
	</ul>
	</div>

  </div>

    
  </div>
  
  
  
 
 
 
 
 
 
 
 
 
 
 
 
  
  </div>
   <style type="text/css">
<!--
#mainfooter {
	POSITION: relative;
	HEIGHT: 150px;
	display: inline;
	background-image: url(tema1/img/footerback.jpg);
	background-repeat: no-repeat;
	background-position: center;
	width: 1000px;
	margin-top: 15px;
}
#footer {
	POSITION: relative; TEXT-ALIGN: center; FONT-STYLE: italic; MARGIN: 0px auto; WIDTH: 956px; FONT-FAMILY: Georgia; HEIGHT: 80px; COLOR: #858282; CLEAR: both; FONT-SIZE: 10px; TOP: 67px
}
.ftxt1 {
	POSITION: relative; FLOAT: left; COLOR: #545454; TOP: 20px
}
.ftxt2 {
	POSITION: relative; FLOAT: right; TOP: 20px
}
#footer A {
	COLOR: #994d12; TEXT-DECORATION: none
}
#footer A:hover {
	COLOR: #994d12; TEXT-DECORATION: underline
}
-->
 </style>
</p>
<p align="center"><em>Tasar&#305;m &copy; <a href="http://www.digifelis.com">Digifelis </a>2011</em> &nbsp; /&nbsp; Tasar&#305;m ve Grafik Haklar&#305; Sakl&#305;d&#305;r. </p>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11140047-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>





</body>
</html>

<?php
///include("mysql_sonlandirma.php");

?>


