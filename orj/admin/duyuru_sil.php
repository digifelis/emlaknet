<?php

$vt->sql("delete from duyuru where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 { echo "<center>DUYURU BA�ARILI B�R �EK�LDE S�L�ND�.</center>"; } else {echo "<center> DUYURU S�LMEDE HATA OLU�TU L�TFEN TEKRAR DENEY�N�Z!!!! </center> "; }
?>