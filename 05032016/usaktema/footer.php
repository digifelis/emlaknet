<table width="100%" border="0">
  <tr>
    <td align="center">
    <?php $vt->sql('select * from reklam where yer=21 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
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
                <TD vAlign=top >
       

	   
	   
	    <?php 
  		$vt->sql("select id from ilan_ticari where onay='4' ")->sor();
				$veriler = $vt->alHepsi();
				foreach($veriler as $veri) {
				$rastgele[]= $veri->id;
				}
				$x=0;
				$rastgele=@array_flip($rastgele);
				// belirtilen sayida çikartma bölümü baslangici
				for($i=1;$i <= 5; $i++){
				
				
				
				
								$rastgele_id = @array_rand($rastgele, 1);
				unset($rastgele[$rastgele_id]);
				
// $vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor();

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  limit 0,1")->sor(15);



///$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 1,1")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;
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

$uye_tipi = $veri->uye_tipi;

$foto_adi = $veri->foto_adi;

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
             
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
                </TD >
               
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





</body>
</html>




