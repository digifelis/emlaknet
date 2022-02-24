
<table width="100%" border="1">
  <tr>
    <td>
  &nbsp;&nbsp;<a href="index.php?action=reklamlar&amp;subaction=reklam_ekle">REKLAM EKLE</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?action=reklamlar&amp;subaction=reklam_liste">REKLAM L&#304;STELE</a></td>
  </tr>
  </table>
<?php
if(temizle($_GET["subaction"]) == "") { require_once("reklam_ekle.php"); }

if(temizle($_GET["subaction"]) == "reklam_ekle") { require_once("reklam_ekle.php"); }
if(temizle($_GET["subaction"]) == "reklam_liste") { require_once("reklam_liste.php"); }
if(temizle($_GET["subaction"]) == "reklam_duzelt") { require_once("reklam_duzelt.php"); }
if(temizle($_GET["subaction"]) == "reklam_sil") { require_once("reklam_sil.php"); }

?>