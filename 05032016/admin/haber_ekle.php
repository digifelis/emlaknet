<?php 
if(temizle($_POST["baslik"]) != "") {
	
$vt->sql("insert into haberler (baslik,icerik,tarih,gorunme)  values ('".temizle($_POST["baslik"])."' , '".temizle($_POST["haber"])."' , '".$son_zaman."' , '".temizle($_POST["gorunme"])."') ")->sor();
 if($vt->affRows() > 0)
 { echo "<center>HABER BAÞARILI BÝR ÞEKÝLDE EKLENDÝ.</center>"; } else {echo "<center> HABER EKLEMEDE HATA OLUÞTU LÜTFEN TEKRAR DENEYÝNÝZ!!!! </center> "; }
 
}


?>

<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <th width="18%" align="right" valign="top" scope="row">Haber Baþlýðý :</th>
    <td width="82%"><label>
      <input name="baslik" type="text" id="baslik" size="120" />
      <br />
      <br />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Haber i&ccedil;eriði :</th>
    <td>
    
         <?php

 $ckeditor = new CKEditor('haber');
 $ckeditor->basePath = '../ckeditor_mansur/';
 $ckfinder = new CKFinder();
 $ckfinder->BasePath = '../ckfinder_mansur/'; // Note: BasePath property in CKFinder class starts with capital letter
 $ckfinder->SetupCKEditorObject($ckeditor);
 $ckeditor->editor('haber');
?> 
    
    
    </td>
  </tr>
  <tr>
    <th align="right" scope="row">G&ouml;r&uuml;nme :</th>
    <td align="left"><label>
      <select name="gorunme" id="gorunme">
        <option value="EVET">EVET</option>
        <option value="HAYIR">HAYIR</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td align="right"><input type="submit" name="EKLE" id="EKLE" value="               EKLE               " /></td>
  </tr>
</table>
</form>