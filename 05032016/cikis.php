<?php
session_start();
session_destroy();
//giris'e git
header("Location:index.php");
?>