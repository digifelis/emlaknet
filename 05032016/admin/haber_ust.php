<?php

 include_once '../ckeditor_mansur/ckeditor.php';
 include_once '../ckfinder_mansur/ckfinder.php';	
 ?>
<table width="100%" border="1">
  <tr>
    <td>
  &nbsp;&nbsp;<a href="index.php?action=haber&amp;subaction=haber_ekle">HABER EKLE</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?action=haber&amp;subaction=haber_liste">HABER L&#304;STELE</a></td>
  </tr>
  </table>
<?php
if(temizle($_GET["subaction"]) == "") { require_once("haber_ekle.php"); }

if(temizle($_GET["subaction"]) == "haber_ekle") { require_once("haber_ekle.php"); }
if(temizle($_GET["subaction"]) == "haber_liste") { require_once("haber_liste.php"); }
if(temizle($_GET["subaction"]) == "haber_duzelt") { require_once("haber_duzelt.php"); }
if(temizle($_GET["subaction"]) == "haber_sil") { require_once("haber_sil.php"); }

?>