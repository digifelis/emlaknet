<?php

 include_once '../ckeditor_mansur/ckeditor.php';
 include_once '../ckfinder_mansur/ckfinder.php';	
 ?>
<table width="100%" border="1">
  <tr>
    <td>
  &nbsp;&nbsp;<a href="index.php?action=duyuru&amp;subaction=duyuru_ekle">DUYURU EKLE</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?action=duyuru&amp;subaction=duyuru_liste">DUYURU L&#304;STELE</a></td>
  </tr>
  </table>
<?php
if(temizle($_GET["subaction"]) == "") { require_once("duyuru_ekle.php"); }

if(temizle($_GET["subaction"]) == "duyuru_ekle") { require_once("duyuru_ekle.php"); }
if(temizle($_GET["subaction"]) == "duyuru_liste") { require_once("duyuru_liste.php"); }
if(temizle($_GET["subaction"]) == "duyuru_duzelt") { require_once("duyuru_duzelt.php"); }
if(temizle($_GET["subaction"]) == "duyuru_sil") { require_once("duyuru_sil.php"); }

?>