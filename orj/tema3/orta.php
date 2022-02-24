<div class="grid_100">

<div class="grid_55 slider1"><img src="tema3/images/emlak_r8_c2.jpg" /></div>
<div class="grid_20 butonlar">
<a href="index.php?action=arama&amp;grup=1&amp;liste=1"><img src="tema3/images/konut_buton.jpg" /></a>
<a href="index.php?action=arama&amp;grup=2&amp;liste=1"><img src="tema3/images/isyeri.jpg" /></a>
<a href="index.php?action=arama&amp;grup=3&amp;liste=1"><img src="tema3/images/arsa.jpg" width="216" /></a></div>
<div class="grid_21 slider2">



<?php 
	$vt->sql('select * from reklam where yer=1 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>


</div>

</div>

<div class="clear"></div>
<div class="grid_100">
<div class="grid_75 son_eklenen">
<div class="baslik">Son Eklenen &#304;lanlar</div>
<div class="grid_75 liste"><?php 
				
				
				
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
 $table1 = '<div class="kutu"><table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
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
  </tr></tbody></table><br /></div>';
 }
		   
		 $data_yeni[$x] = $table1;
		 $x++;
		   }
		   
		    echo resim_listele(4,0,0,$data_yeni); 
		   
		   // bitis ?></div>
</div>

<div class="grid_22 yatirimci">

<div class="grid_22 liste"><?php include("sabit/hizli_arama.php"); ?></div>




<?php 
	$vt->sql('select * from reklam where yer=2 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>


<?php 
	$vt->sql('select * from reklam where yer=3 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=4 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>




</div>


</div>

<div class="clear"></div>
<!--sdfghjklş -->
<div class="grid_100">

<div class="grid_21 sol_sutun">
<div class="grid_21 en_cok_incelenenler">
<div class="baslik grid_21">En &ccedil;ok &#304;ncelenen &#304;lanlar</div>
<?php 
				
				
				
		$x=0;
		$table1="";
			for($i=1;$i <= 5 ; $i++){
				$ii = $i-1;
				
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select hit, ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  order by ilan_ticari.hit desc  limit ".$ii.",1 ")->sor();


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
 $table1 = '<div class="kutu"><table border="0" cellspacing="2" cellpadding="2" style="width:98%" 
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
  </tr></tbody></table><br /></div>';
 }
		   
		 $data_yeni1[$x] = $table1;
		 $x++;
		   }
		   
		    echo resim_listele(1,0,0,$data_yeni1); 
		   
		   // bitis
		    ?>

</div>
<div class="grid_21 haberler">

<div class="baslik">&#304;statistik</div>

</div>
<div class="grid_21 sayac"><?php include("sabit/sayac.php"); ?>	</div>


<?php 
	$vt->sql('select * from reklam where yer=6 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>

<?php 
	$vt->sql('select * from reklam where yer=7 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>

<?php 
	$vt->sql('select * from reklam where yer=8 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php 
	$vt->sql('select * from reklam where yer=9 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>


<?php 
	$vt->sql('select * from reklam where yer=10 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);
	//$vt->sql('select * from reklam where yer=1 order by id desc')->sor(15);
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>



</div>

<div class="grid_77 vitrin">

<div class="baslik">Vitrin &#304;lanlar&#305;</div>
<div class="grid_77 liste">   
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
 $tablo = ' <div class="kutu"> <TABLE style="width:98%" border=0   align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
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

$tablo .= ' <A  title="'.$ilan_basligi .'"  href="index.php?action=detail&amp;id='.$veri->id.'">'.$ilan_basligi.'</A><BR />'.ondalik($veri->fiyat)."&nbsp;".$birim.'</DIV> </TD></TR></TBODY></TABLE><BR /></div>';
 } 
 
 $data_vitrin[$x] = $tablo;
	 $x++;
				}
	echo resim_listele(4,0,0,$data_vitrin);  
	 ?>                  
                  
           </div>
</div>





</div>



<div class="grid_100" >

<div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil27">&#304;LAN KATEGOR&#304;S&#304;</span></div>
      </div> 
<div style="padding-left:15px;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="left">
                                    </td>
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

<div class="grid_100">

<div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil27">EMLAK&Ccedil;ILAR</span></div>
      </div>
<div style="padding-left:15px;">
<table width="97%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="left">
    
                                 </td>
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