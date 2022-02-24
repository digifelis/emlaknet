<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_emlaknet = "localhost";
$database_emlaknet = "emlaktr_emlak";
$username_emlaknet = "emlaktr_root";
$password_emlaknet = "12345678";
$emlaknet = mysql_pconnect($hostname_emlaknet, $username_emlaknet, $password_emlaknet) or trigger_error(mysql_error(),E_USER_ERROR); 



mysql_query("SET character_set_client='latin5'");
mysql_query("SET character_set_results='latin5'");
mysql_query("SET character_set_connection='latin5'");

?>