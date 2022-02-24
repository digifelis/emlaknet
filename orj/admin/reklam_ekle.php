<?php 

if(temizle($_POST["baslik"]) != "") {
	
if($_FILES) {

include("../class/kgUploader.class.php");
	$mime_types = array('image/pjpeg', 'image/jpeg'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['resim'], '../resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim yükleme ayar kysmy
   
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;	

	if($yuklenen_resim != "") {
	
$yuklenen_resim = "resimler/".$yuklenen_resim;
$kod = '<a href="'.$_POST["adres"].'" target="_blank"><img src="'.$yuklenen_resim.'" height="'.$_POST["yukseklik"].'" width="'.$_POST["genislik"].'" border="0" ></a>';


$vt->sql("insert into reklam (baslik,kod,bas_tarih,bit_tarih,aktif,yer,adres,yukseklik,genislik , resim)  values ('".temizle($_POST["baslik"])."' , '".$kod."' , '".temizle($_POST["bas_tarihi"])."' ,'".temizle($_POST["bit_tarihi"])."', '".temizle($_POST["aktif"])."', '".temizle($_POST["yer"])."','".temizle($_POST["adres"])."','".temizle($_POST["yukseklik"])."','".temizle($_POST["genislik"])."' , '".$yuklenen_resim."') ")->sor();
 if($vt->affRows() > 0)
 { echo "<center>Reklam Baþarýlý bir þekilde eklendi.</center>"; } else {echo "<center> Eklemede hata oluþtu!!!! </center> "; }



	}


}

}
?>

<form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <table width="517" border="1" align="center">
    <tr>
      <td width="124" nowrap="nowrap">Reklam Ba&#351;l&#305;&#287;&#305;</td>
      <td width="377"><input type="text" name="baslik" id="baslik" /></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Ba&#351;lang&#305;&#351; Tarihi</td>
      <td><label>
        <input type="text" name="bas_tarihi" id="datepicker" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Biti&#351; Tarihi</td>
      <td><label>
        <input type="text" name="bit_tarihi" id="datepicker1" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Yay&#305;n Durumu</td>
      <td><label>
        <select name="aktif" id="aktif">
        <option value="evet">EVET</option>
          <option value="hayir">HAYIR</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Reklam Yeri</td>
      <td><label>
        <select name="yer" id="yer">
                  <option value="1" selected>1 nolu alan</option>
          <option value="2">2 nolu alan</option>
          <option value="3">3 nolu alan</option>
          <option value="4">4 nolu alan</option>
          <option value="5">5 nolu alan</option>
          <option value="6">6 nolu alan</option>
          <option value="7">7 nolu alan</option>
          <option value="8">8 nolu alan</option>
          <option value="9">9 nolu alan</option>
          <option value="10">10 nolu alan</option>
          <option value="11">11 nolu alan</option>
          <option value="12">12 nolu alan</option>
          <option value="13">13 nolu alan</option>
          <option value="14">14 nolu alan</option>
          <option value="15">15  nolu alan</option>
          <option value="16">16  nolu alan</option>
          <option value="17">17  nolu alan</option>
          <option value="18">18  nolu alan</option>
          <option value="19">19  nolu alan</option>
          <option value="20">20  nolu alan</option>
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
        <input type="text" name="adres" id="adres" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Y&uuml;kseklik</td>
      <td><label>
        <input type="text" name="yukseklik" id="yukseklik" />
      </label></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Geni&#351;lik</td>
      <td><label>
        <input type="text" name="genislik" id="genislik" />
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
