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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ $ilan_tipi = $veri12->adi; }

$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$ilan_il = $veri2->sehiradiUpper; }

$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	$ilan_ilce = $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	$ilan_koy = $veri4->mahalleAdi; }

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
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
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ $ilan_tipi = $veri12->adi; }

$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$ilan_il = $veri2->sehiradiUpper; }

$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	$ilan_ilce = $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	$ilan_koy = $veri4->mahalleAdi; }

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
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
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ $ilan_tipi = $veri12->adi; }

$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$ilan_il = $veri2->sehiradiUpper; }

$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	$ilan_ilce = $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	$ilan_koy = $veri4->mahalleAdi; }

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
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
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
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
$vt->sql("SELECT * FROM ilan_ticari where onay=4 ORDER BY RAND() LIMIT 1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ $ilan_tipi = $veri12->adi; }

$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	$ilan_il = $veri2->sehiradiUpper; }

$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	$ilan_ilce = $veri3->ilceAdi; }

$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	$ilan_koy = $veri4->mahalleAdi; }

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
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
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
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
<?php	
}
?>
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


<div id="mainfooter">
  	<div id="footer">
  		<div class="ftxt1">
				<p>Tasar&#305;m ve Kodlama  RebereZinar</p>
</div><!-- end ftxt1 -->
    		<div class="ftxt2">
    		  <p>&copy; 2010 Tasar&#305;m ve Grafik Haklar&#305; Sakl&#305;d&#305;r</p>
    		</div><!-- end ftxt2 -->
  	</div><!-- end footer -->
</div><!-- end mainfooter -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11140047-6");
pageTracker._trackPageview();
} catch(err) {}</script>


</body>
</html>
<?php
/// include("mysql_sonlandirma.php");
?>