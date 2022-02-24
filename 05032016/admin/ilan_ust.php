
<table width="100%" border="1">
  <tr>
    <td><form id="form1" name="form1" method="POST" action="index.php?action=ilan">
      <label>
        <input type="text" name="kriter1" id="kriter1" value="<?php echo temizle($_POST["kriter1"]); ?>" />
      </label>
    &nbsp;&nbsp;&nbsp;
    <label>
    <input name="kriter2" type="hidden" id="action" value="id" />
      
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
if(temizle($_GET["subaction"]) == "") { require_once("ilan_liste2.php"); }

if(temizle($_GET["subaction"]) == "ilan_listeg") { require_once("ilan_liste2.php"); }
if(temizle($_GET["subaction"]) == "ilan_sil") { require_once("ilan_sil.php"); }

if(temizle($_GET["subaction"]) == "edit") { require_once("edit.php"); }
if(temizle($_GET["subaction"]) == "pictures") { require_once("pictures.php"); }
if(temizle($_GET["subaction"]) == "eleman_ekle") { require_once("eleman_ekle.php"); }

if(temizle($_GET["subaction"]) == "uzat") { require_once("uzat.php"); }
?>