
<?php
if(temizle($_GET["subaction"]) == "") { require_once("vitrin_liste.php"); }

if(temizle($_GET["subaction"]) == "vitrin_incele") { require_once("vitrin_incele.php"); }
if(temizle($_GET["subaction"]) == "vitrin_sil") { require_once("vitrin_sil.php"); }
if(temizle($_GET["subaction"]) == "vitrin_onayla") { require_once("vitrin_onayla.php"); }

?>