<?php

$vt->sql("delete from haberler where id = '".temizle($_GET["id"])."'")->sor();
 if($vt->affRows() > 0)
 

 
 { echo "<center>HABER BA�ARILI B�R �EK�LDE S�L�ND�.</center>"; } else {echo "<center> HABER S�LMEDE HATA OLU�TU L�TFEN TEKRAR DENEY�N�Z!!!! </center> "; }
?>