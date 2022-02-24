<?php 
$vt->sql("select * from reklam where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
$resim_vt = $veri->resim;

  }
if(temizle($_POST["baslik"]) != "") {
	
if($_FILES) {
// resim varsa bölümü
include("../class/kgUploader.class.php");
	$mime_types = array('image/pjpeg', 'image/jpeg','image/gif','image/png','image/x-png'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['resim'], '../resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim yükleme ayar kysmy
   
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;	

	if($yuklenen_resim != "") {
@unlink("../".$resim_vt."");

$yuklenen_resim = "resimler/".$yuklenen_resim;
$kod = '<a href="'.$_POST["adres"].'" target="_blank"><img src="'.$yuklenen_resim.'" height="'.$_POST["yukseklik"].'" width="'.$_POST["genislik"].'" border="0" ></a>';


$vt->sql("update reklam set baslik='".temizle($_POST["baslik"])."' , kod= '".$kod."' , bas_tarih='".temizle($_POST["bas_tarihi"])."' , bit_tarih='".temizle($_POST["bit_tarihi"])."' , aktif='".temizle($_POST["aktif"])."', yer='".temizle($_POST["yer"])."' ,adres= '".temizle($_POST["adres"])."' , yukseklik= '".temizle($_POST["yukseklik"])."' , genislik='".temizle($_POST["genislik"])."' , resim = '".$yuklenen_resim."'  where id = '".temizle($_GET["id"])."'   ")->sor();

 if($vt->affRows() > 0)
 { echo "<center>Reklam Ba&#351;ar&#305;l&#305; bir &#350;ekilde De&#287;i&#351;tirildi.1</center>"; } else {echo "<center> Eklemede hata oluþtu!!!! 1</center> "; }



	}

else {
	
/// resim yoksa bölümü

$kod = '<a href="'.$_POST["adres"].'" target="_blank"><img src="'.$resim_vt.'" height="'.$_POST["yukseklik"].'" width="'.$_POST["genislik"].'" border="0" ></a>';


$vt->sql("update reklam set baslik='".temizle($_POST["baslik"])."' , kod= '".$kod."' , bas_tarih='".temizle($_POST["bas_tarihi"])."' , bit_tarih='".temizle($_POST["bit_tarihi"])."' , aktif='".temizle($_POST["aktif"])."', yer='".temizle($_POST["yer"])."' ,adres= '".temizle($_POST["adres"])."' , yukseklik= '".temizle($_POST["yukseklik"])."' , genislik='".temizle($_POST["genislik"])."'  where id = '".temizle($_GET["id"])."'   ")->sor();

 if($vt->affRows() > 0)
 { echo "<center>Reklam Ba&#351;ar&#305;l&#305; bir &#350;ekilde De&#287;i&#351;tirildi.2</center>"; } else {echo "<center> Eklemede hata oluþtu!!!! 2</center> "; }

} 




} 
	
}
	
/* $vt->sql("update reklam set baslik='".temizle($_POST["baslik"])."' , kod= '".($_POST["kod"])."' , bas_tarih='".temizle($_POST["bas_tarihi"])."' , bit_tarih='".temizle($_POST["bit_tarihi"])."' , aktif='".temizle($_POST["aktif"])."', yer='".temizle($_POST["yer"])."' where id = '".temizle($_GET["id"])."'   ")->sor();


 if($vt->affRows() > 0)
 { echo "<center>Reklam Baþarýlý bir þekilde eklendi.</center>"; } else {echo "<center> Eklemede hata oluþtu!!!! </center> "; }
 
} */




$vt->sql("select * from reklam where id = '".temizle($_GET["id"])."'")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
?>
<form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <table width="517" border="1" align="center">
    <tr>
      <td width="124" nowrap="nowrap">Reklam Ba&#351;l&#305;&#287;&#305;</td>
      <td width="377"><input type="text" disabled="disabled" name="baslik" id="baslik" value="<?php echo $veri->baslik; ?>"/></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Ba&#351;lang&#305;&#351; Tarihi</td>
      <td><label>
        <input name="bas_tarihi" type="text" id="datepicker" value="<?php echo $veri->bas_tarih; ?>" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Biti&#351; Tarihi</td>
      <td><label>
        <input name="bit_tarihi" type="text" id="datepicker1" value="<?php echo $veri->bit_tarih; ?>" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Yay&#305;n Durumu</td>
      <td><label>
        <select name="aktif" id="aktif">
          <option value="evet" <?php if (!(strcmp("evet", $veri->aktif))) {echo "selected=\"selected\"";} ?>>EVET</option>
          <option value="hayir" <?php if (!(strcmp("hayir", $veri->aktif))) {echo "selected=\"selected\"";} ?>>HAYIR</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Reklam Yeri</td>
      <td><label>
        <select name="yer" id="yer">
          <option value="1" selected="selected" <?php if (!(strcmp(1, $veri->yer))) {echo "selected=\"selected\"";} ?>>1 nolu alan</option>
          <option value="2" <?php if (!(strcmp(2, $veri->yer))) {echo "selected=\"selected\"";} ?>>2 nolu alan</option>
          <option value="3" <?php if (!(strcmp(3, $veri->yer))) {echo "selected=\"selected\"";} ?>>3 nolu alan</option>
          <option value="4" <?php if (!(strcmp(4, $veri->yer))) {echo "selected=\"selected\"";} ?>>4 nolu alan</option>
          <option value="5" <?php if (!(strcmp(5, $veri->yer))) {echo "selected=\"selected\"";} ?>>5 nolu alan</option>
          <option value="6" <?php if (!(strcmp(6, $veri->yer))) {echo "selected=\"selected\"";} ?>>6 nolu alan</option>
          <option value="7">7 nolu alan</option>
          <option value="8" <?php if (!(strcmp(8, $veri->yer))) {echo "selected=\"selected\"";} ?>>8 nolu alan</option>
<option value="9" <?php if (!(strcmp(9, $veri->yer))) {echo "selected=\"selected\"";} ?>>9 nolu alan</option>
          <option value="10" <?php if (!(strcmp(10, $veri->yer))) {echo "selected=\"selected\"";} ?>>10 nolu alan</option>
          <option value="11" <?php if (!(strcmp(11, $veri->yer))) {echo "selected=\"selected\"";} ?>>11 nolu alan</option>
<!--          <option value="12" <?php if (!(strcmp(12, $veri->yer))) {echo "selected=\"selected\"";} ?>>12 nolu alan</option>
          <option value="13" <?php if (!(strcmp(13, $veri->yer))) {echo "selected=\"selected\"";} ?>>13 nolu alan</option>
          <option value="14" <?php if (!(strcmp(14, $veri->yer))) {echo "selected=\"selected\"";} ?>>14 nolu alan</option>
          <option value="15">15 nolu alan</option>
          <option value="16">16  nolu alan</option>
          <option value="17">17  nolu alan</option>
          <option value="18">18  nolu alan</option>
          <option value="19">19  nolu alan</option>
          <option value="20">20  nolu alan</option>				 -->
        </select>
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Resim</td>
      <td><label>
        <input type="file" name="resim[]" id="resim[]" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Adres</td>
      <td><label>
        <input name="adres" type="text" id="adres" value="<?php echo $veri->adres; ?>" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Y&uuml;kseklik</td>
      <td><label>
        <input name="yukseklik" type="text" id="yukseklik" value="<?php echo $veri->yukseklik; ?>" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Geni&#351;lik</td>
      <td><label>
        <input name="genislik" type="text" id="genislik" value="<?php echo $veri->genislik; ?>" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="    KAYDET    " />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
?> 
