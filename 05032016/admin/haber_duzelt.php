<?php 
if(temizle($_POST["baslik"]) != "") {
	
$vt->sql("update haberler set baslik= '".temizle($_POST["baslik"])."' , icerik = '".temizle($_POST["haber"])."' , gorunme = '".temizle($_POST["gorunme"])."' where id = '".temizle($_GET["id"])."' ")->sor();

 if($vt->affRows() > 0)
 { echo "<center>HABER BAÞARILI BÝR ÞEKÝLDE DÜZELTILDI.</center>"; } else {echo "<center> HABER DÜZELTMEDE HATA OLUÞTU LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; }
 
}

$vt->sql("select * from haberler where id = '".temizle($_GET["id"])."'")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	
?>

<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <th width="18%" align="right" valign="top" scope="row">Haber Baþlýðý :</th>
    <td width="82%"><label>
      <input name="baslik" type="text" id="baslik" size="120" value="<?php echo $veri->baslik; ?>" />
      <br />
      <br />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Haber i&ccedil;eriði :</th>
    <td>
    
         <?php

 $ckeditor1 = new CKEditor('haber');
 $ckeditor1->basePath = '../ckeditor_mansur/';
 $ckfinder1 = new CKFinder();
 $ckfinder1->BasePath = '../ckfinder_mansur/'; // Note: BasePath property in CKFinder class starts with capital letter
 $ckfinder1->SetupCKEditorObject($ckeditor1);

 $initialValue = $veri -> icerik ;
 $ckeditor1->editor('haber', $initialValue);
?> 
    
    
    </td>
  </tr>
  <tr>
    <th align="right" scope="row">G&ouml;r&uuml;nme :</th>
    <td align="left"><label>
      <select name="gorunme" id="gorunme">
        <option value="EVET" <?php if (!(strcmp("EVET", "$veri->gorunme"))) {echo "selected=\"selected\"";} ?>>EVET</option>
        <option value="HAYIR" <?php if (!(strcmp("HAYIR", "$veri->gorunme"))) {echo "selected=\"selected\"";} ?>>HAYIR</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td align="right"><input type="submit" name="EKLE" id="EKLE" value="               D&Uuml;ZELT               " /></td>
  </tr>
</table>
</form>
<?php
}
?>