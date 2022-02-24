<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../lib/jquery.validate.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $("#form1").validate({
	
  rules: {
    isim: { required: true, maxlength: 100},
	admin_email: { required: true, maxlength: 100 ,email:true},
	aciklama: { required: true, maxlength: 500},
	title: { required: true, maxlength: 100},
	anahtar_kelime: { required: true, maxlength: 100},
	site: { required: true, maxlength: 100}
  },
  
  messages: {
	  isim:{required:'Bos birakmayiniz',maxlength:'çok uzun. en fazla 100 karakter'},
	  admin_email:{required:'Bos birakmayiniz',maxlength:'çok uzun .en fazla 100 karakter' ,email:'Lütfen Geçerli Email adresi yaziniz'},
	  aciklama:{required:'Bos birakmayiniz',maxlength:'çok uzun . en fazla 500 karakter'},
	  title:{required:'Bos birakmayiniz',maxlength:'çok uzun. en fazla 100 karakter'},
	  anahtar_kelime:{required:'Bos birakmayiniz',maxlength:'çok uzun. en fazla 100 karakter'},
	  site:{required:'Bos birakmayiniz',maxlength:'çok uzun. en fazla 100 karakter'}
	  
  }
  
  
});
  });
  </script>
  <?php
  /// kayýt iþlemleri bölümü
  echo temizle($_POST["sifre_eski"]);
  if(temizle($_POST["isim"]) != "") {

  	  $vt->sql('select sifre from ayar where id=1')->sor();
	    $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  $sifresi= $veri->sifre;
  }
	if(temizle($_POST["sifre_eski"]) == $sifresi  ) {
		
	$vt->sql('update ayar set admin_email="'.temizle($_POST["admin_email"]).'" , aciklama="'.temizle($_POST["aciklama"]).'" , title="'.temizle($_POST["title"]).'" , anahtar_kelime= "'.temizle($_POST["anahtar_kelime"]).'" , site="'.temizle($_POST["site"]).'" , normal_uye_ilan_sayisi="'.temizle($_POST["ilan_sayisi1"]).'" , emlakci_ilan_sayisi="'.temizle($_POST["ilan_sayisi2"]).'" , mutahit_ilan_sayisi="'.temizle($_POST["ilan_sayisi3"]).'" , normal_uye_onay="'.temizle($_POST["normal_onay"]).'" , emlakci_onay="'.temizle($_POST["emlakci_onay"]).'" , mutahit_onay="'.temizle($_POST["mutahit_onay"]).'" , sifre= "'.temizle($_POST["sifre_yeni1"]).'",vitrin_ilan_sayisi = "'.temizle($_POST["vitrin_sayisi"]).'",yeni_ilan_sayisi= "'.temizle($_POST["yeni_ilan_sayisi"]).'" ,slider= "'.temizle($_POST["slider"]).'"  where id=1')->sor();
	echo "<center>Þifre Deðiþtirildi</center>";
	}
	
	if(temizle($_POST["sifre_eski"]) == "") {
		
	$vt->sql('update ayar set admin_email="'.temizle($_POST["admin_email"]).'" , aciklama="'.temizle($_POST["aciklama"]).'" , title="'.temizle($_POST["title"]).'" , anahtar_kelime= "'.temizle($_POST["anahtar_kelime"]).'" , site="'.temizle($_POST["site"]).'" , normal_uye_ilan_sayisi="'.temizle($_POST["ilan_sayisi1"]).'" , emlakci_ilan_sayisi="'.temizle($_POST["ilan_sayisi2"]).'" , mutahit_ilan_sayisi="'.temizle($_POST["ilan_sayisi3"]).'" , normal_uye_onay="'.temizle($_POST["normal_onay"]).'" , emlakci_onay="'.temizle($_POST["emlakci_onay"]).'" , mutahit_onay="'.temizle($_POST["mutahit_onay"]).'" ,vitrin_ilan_sayisi = "'.temizle($_POST["vitrin_sayisi"]).'",yeni_ilan_sayisi= "'.temizle($_POST["yeni_ilan_sayisi"]).'" ,slider= "'.temizle($_POST["slider"]).'"   where id=1')->sor();	
	echo "<center>Bilgiler Deðiþtirildi</center>";
	}
	  
	  
 }
  
 
  //// bilgileri ilisteleme bölümü
  $vt->sql('select * from ayar where id=1 ')->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
  ?>
   <form id="form1" name="form1" method="post" action="?action=ayar" class="cmxform" >
<table width="50%" border="1" align="center">
  <tr>
    <td>Admin Kullanýcý Adý</td>
    <td>&nbsp;
    <label for="cisim">
    <input name="isim" type="text"  class="required" id="cisim" value="<?php  echo $veri->isim;  ?>" readonly="readonly" />
    </label>
                        </td>
  </tr>
  <tr>
    <td>Þimdiki Þifreniz</td>
    <td>&nbsp;    
    <label for="csifre_eski">
    <input type="password" name="sifre_eski" id="csifre_eski"  value="" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Admin Yeni Þifre</td>
    <td>&nbsp;
    <label for="csifre_yeni1">
    <input type="password" name="sifre_yeni1" id="csifre_yeni1"  value="" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Site Adresi <br>
      (baþta http:\\www b&ouml;l&uuml;m&uuml; olmayacak)</td>
    <td>&nbsp;
      <label for="csite">
        <input type="text" name="site" id="csite" class="required" value="<?php  echo $veri->site;  ?>" />
        </label>
      </td>
  </tr>
  <tr>
    <td>Admin Email</td>
    <td>&nbsp;
    <label for="cadmin_email">
    <input type="text" name="admin_email" id="cadmin_email" class="required" value="<?php  echo $veri->admin_email;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Site Title</td>
    <td>&nbsp;
    <label for="ctitle">
    <input type="text" name="title" id="ctitle" class="required" value="<?php  echo $veri->title;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Site Anahtar Kelime</td>
    <td>&nbsp;
    <label for="canahtar_kelime">
    <input type="text" name="anahtar_kelime" id="canahtar_kelime" class="required" value="<?php  echo $veri->anahtar_kelime;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Site A&ccedil;ýklama</td>
    <td>&nbsp;
    <label for="caciklama">
      <textarea name="aciklama" cols="40" rows="5" class="required" id="caciklama"><?php  echo $veri->aciklama;  ?>
      </textarea>
    </label>
    </td>
  </tr>
  <tr>
    <td>Normal Uye Ýlan sayýsý</td>
        <td>&nbsp;
    <label for="cilan_sayisi1">
    <input type="text" name="ilan_sayisi1" id="cilan_sayisi1" class="required" value="<?php  echo $veri->normal_uye_ilan_sayisi;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Emlak&ccedil;ý Ýlan sayýsý</td>
            <td>&nbsp;
    <label for="cilan_sayisi2">
    <input type="text" name="ilan_sayisi2" id="cilan_sayisi2" class="required" value="<?php  echo $veri->emlakci_ilan_sayisi;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>M&uuml;tahit ilan Sayýsý</td>
            <td>&nbsp;
    <label for="cilan_sayisi3">
    <input type="text" name="ilan_sayisi3" id="cilan_sayisi3" class="required" value="<?php  echo $veri->mutahit_ilan_sayisi;  ?>" />
    </label>
    </td>
  </tr>
  <tr>
    <td>Normal &Uuml;ye Onay Durumu</td>
    <td><label>
      <select name="normal_onay" id="normal_onay">
        <option value="1" <?php if (!(strcmp(1, "$veri->normal_uye_onay"))) {echo "selected=\"selected\"";} ?>>onaysýz</option>
        <option value="2" <?php if (!(strcmp(2, "$veri->normal_uye_onay"))) {echo "selected=\"selected\"";} ?>>email onay</option>
        <option value="3" <?php if (!(strcmp(3, "$veri->normal_uye_onay"))) {echo "selected=\"selected\"";} ?>>admin onay</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Emlak&ccedil;ý Onay Durumu</td>
        <td><label>
      <select name="emlakci_onay" id="emlakci_onay">
        <option value="1" <?php if (!(strcmp(1, "$veri->emlakci_onay"))) {echo "selected=\"selected\"";} ?>>onaysýz</option>
        <option value="2" <?php if (!(strcmp(2, "$veri->emlakci_onay"))) {echo "selected=\"selected\"";} ?>>email onay</option>
        <option value="3" <?php if (!(strcmp(3, "$veri->emlakci_onay"))) {echo "selected=\"selected\"";} ?>>admin onay</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>M&uuml;tahit Onay Durumu</td>
        <td><label>
      <select name="mutahit_onay" id="mutahit_onay">
        <option value="1" <?php if (!(strcmp(1, "$veri->mutahit_onay"))) {echo "selected=\"selected\"";} ?>>onaysýz</option>
        <option value="2" <?php if (!(strcmp(2, "$veri->mutahit_onay"))) {echo "selected=\"selected\"";} ?>>email onay</option>
        <option value="3" <?php if (!(strcmp(3, "$veri->mutahit_onay"))) {echo "selected=\"selected\"";} ?>>admin onay</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Vitrin &#304;lan Say&#305;s&#305;</td>
    <td><label>
      <input type="text" name="vitrin_sayisi" id="vitrin_sayisi" value="<?php  echo $veri->vitrin_ilan_sayisi;  ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Yeni &#304;lan Say&#305;s&#305;</td>
    <td><label>
      <input type="text" name="yeni_ilan_sayisi" id="yeni_ilan_sayisi" value="<?php  echo $veri->yeni_ilan_sayisi;  ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Slider ilan Numaralar&#305;<br />
      Not1: &#304;lan numaralar&#305; aras&#305;na virg&uuml;l koyunuz<br />
      Not2: Bu &ouml;zellik Slider &ouml;zelli&#287;i olan temalar i&ccedil;in ge&ccedil;erlidir. </td>
    <td><input name="slider" type="text" id="slider"  value="<?php  echo $veri->slider;  ?>" size="40" />&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="     KAYDET     " /></td>
  </tr>
</table>
</form>
<?php } ?>