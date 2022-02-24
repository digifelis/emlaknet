<table width="100%" border="0">
  <tr>
    <td align="left" scope="col"><a href="?action=uye&amp;list=1">Emlak&ccedil;&#305;lar&#305; Listele</a> &nbsp;|&nbsp;&nbsp;<a href="?action=uye&amp;list=2">Bireysel &Uuml;yeleri Listele</a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="?action=uye&amp;list=3">M&uuml;teahhitleri Listele</a> &nbsp;</td>
    <td align="right" scope="col">&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <th width="25" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">NO</th>
    <th width="150" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">KAYIT TARÝHÝ</th>    
    <th width="150" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">FÝRMA ADI</th>    
    <th width="250" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">ÝSÝM SOYAD</th>
    <th width="250" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">KULLANICI ADI</th>
    <th width="34" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">Ýncele</th>
    <th width="35" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">Ýlanlar&#305;</th>
    <th width="30" nowrap="nowrap" bgcolor="#D4D4D4" scope="col">Sil</th>
  </tr>
  <?php
 
  $kriter="";
  if(temizle($_GET["list"]) != "") { $kriter .= "and uye_tipi = ".temizle($_GET["list"]).""; }
  if(temizle($_POST["kriter1"]) != "") { $kriter .= "and ".temizle($_POST["kriter2"])." = ".temizle($_POST["kriter1"]).""; }
  
 // if(temizle($_GET["list"]) != "" and $_POST["kriter1"]) != "") { $kriter = "and ".temizle($_POST["kriter2"])." = ".temizle($_POST["kriter1"]).""; }
  
//  echo $kriter;
  $sayfadaki_kayit_sayisi = 20;
  if(temizle($_GET["sayfa"]) == '') {$limit = "limit 0,".$sayfadaki_kayit_sayisi;}
if(temizle($_GET["sayfa"]) != '') { $limit = "limit ".temizle($_GET["sayfa"]-1)* $sayfadaki_kayit_sayisi .", ".$sayfadaki_kayit_sayisi." "; }
 
 $vt->sql("select * from uyeler where id > 0  ".$kriter." order by id desc ")->sor(); 
  $toplam_kayit =$vt->numRows();
 
  $vt->sql("select * from uyeler  where id > 0  ".$kriter." order by id desc ". $limit ."")->sor();
  
  
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri)
  {

  ?>
  <tr>
    <td bgcolor="#E9E9E9">&nbsp;<?php echo $veri->id; ?></td>
    <td bgcolor="#E9E9E9">&nbsp;<?php echo $veri->kayit_tarihi; ?></td>    
    <td bgcolor="#E9E9E9">&nbsp;<?php echo $veri->sirket; ?></td>
    <td bgcolor="#E9E9E9">&nbsp;<?php echo $veri->isim_soyad; ?></td>    
    <td bgcolor="#E9E9E9">&nbsp;<?php echo $veri->kullanici_adi; ?></td>
    <td align="center" bgcolor="#E9E9E9">&nbsp;<a href="index.php?action=uye&amp;subaction=uye_bilg&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_02.png" width="15" height="15" border="0" /></a></td>
    <td align="center" bgcolor="#E9E9E9">&nbsp;<a href="index.php?action=uye&amp;subaction=ilan_listeg&amp;id=<?php echo $veri->id; ?>&sortorder=desc"><img src="etc/onebit_39.png" width="15" height="15" border="0" /></a></td>
    <td align="center" bgcolor="#E9E9E9">&nbsp;<a href="index.php?action=uye&amp;subaction=sil&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_33.png" width="15" height="15" border="0" /></a></td>
  </tr>
  <?php
  }
  ?>
  <tr><th colspan="6">
  <?php 
  echo "<center><h4>".sayfala(temizle($_GET["sayfa"]),$toplam_kayit,$sayfadaki_kayit_sayisi,'action=uye&list='.temizle($_GET["list"]).'')."</h4></center>";
  ?>
</th></tr>
</table>
