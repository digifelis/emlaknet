<table width="100%" border="0">
  <tr>
    <td align="center">
<center>    
    <script type="text/javascript"><!--
google_ad_client = "pub-8437298364479884";
/* 728x90, olusturulma 04.06.2010 */
google_ad_slot = "8386191036";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    
    </center>
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
                <TD colspan="4" align="left" vAlign=top>
                
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor();
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor();

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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor();
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor();
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
	<li><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?> >Konut Ilanlari</a></li>
	<li><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?> >Isyeri Ilanlari</a></li>
	<li><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?> >Arsa Ilanlari</a></li>
    <li><a href="?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlakçi Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	<li><a href="?action=giris" title="" <?php if(temizle($_GET["action"]) == "giris") { echo 'class="current"'; } ?> >Üye Girisi</a></li>
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >Üye Ol</a></li> 
    <li><a href="?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >Iletisim</a></li> 
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
<p align="center"><em>Tasar&#305;m &copy; EmlakNetTurkiye.com 2009 - 2010</em> &nbsp; /&nbsp; Tasar&#305;m ve Grafik Haklar&#305; Sakl&#305;d&#305;r. </p>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11140047-9");
pageTracker._trackPageview();
} catch(err) {}</script>





</body>
</html>



