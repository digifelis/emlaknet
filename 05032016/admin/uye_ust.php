<table width="100%" border="1">
  <tr>
    <td><form id="form1" name="form1" method="POST" action="">
      <label>
        <input type="text" name="kriter1" id="kriter1" value="<?php echo temizle($_POST["kriter1"]); ?>" />
      </label>
    &nbsp;&nbsp;&nbsp;
    <label>
      <select name="kriter2" id="kriter2">
       <option value="id" <?php if (!(strcmp("id", $_POST["kriter2"]))) {echo "selected=\"selected\"";} ?>>&Uuml;YE NO</option>
        <option value="kullanici_adi" <?php if (!(strcmp("kul_adi", $_POST["kriter2"]))) {echo "selected=\"selected\"";} ?>>KULLANICI ADI</option>
        <option value="isim_soyad" <?php if (!(strcmp("isim", $_POST["kriter2"]))) {echo "selected=\"selected\"";} ?>>ÝSÝM SOYAD</option>
        <option value="email" <?php if (!(strcmp("email", $_POST["kriter2"]))) {echo "selected=\"selected\"";} ?>>EMAÝL</option>
       
      </select>
    </label>
    <label>
      <input type="submit" name="button" id="button" value="       Bul       " />
&nbsp;

    </label>
    <input name="action" type="hidden" id="action" value="uye" />
    </form></td>
  </tr>
  </table>
<?php
if(temizle($_GET["subaction"]) == "") { include("uye.php"); }
if(temizle($_GET["subaction"]) == "uye_bilg") { require_once("uye_bilgi.php"); }
if(temizle($_GET["subaction"]) == "ilan_listeg") { require_once("ilan_liste.php"); }
if(temizle($_GET["subaction"]) == "ilan_sil") { require_once("ilan_sil.php"); }

if(temizle($_GET["subaction"]) == "edit") { require_once("edit.php"); }
if(temizle($_GET["subaction"]) == "pictures") { require_once("pictures.php"); }
if(temizle($_GET["subaction"]) == "eleman_ekle") { require_once("eleman_ekle.php"); }

if(temizle($_GET["subaction"]) == "sil") { require_once("uye_sil.php"); }

?>