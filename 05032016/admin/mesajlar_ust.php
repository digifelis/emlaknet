<?php
if(temizle($_GET["subaction"]) == "") { require_once("mesajlar_liste.php"); }

if(temizle($_GET["subaction"]) == "mesaj_incele") { require_once("mesaj_incele.php"); }
if(temizle($_GET["subaction"]) == "mesaj_sil") { require_once("mesaj_sil.php"); }
if(temizle($_GET["subaction"]) == "mesaj_cevapla") { require_once("mesaj_cevapla.php"); }

?>