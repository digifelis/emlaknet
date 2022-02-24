<?php 
class dbMysql 
{ 
var $host , $user , $pass , $conn ; 
var $errNum , $errMsg ; 
var $rowCount , $qryType ; 

function dbMysql ( $host , $user , $pass ) 
{ 
$this -> host = $host ; 
$this -> user = $user ; 
$this -> pass = $pass ; 
$this -> rowCount = 0 ; 
$this -> errNum = 0 ; 
$this -> errMsg = '' ; 
$this -> qryType = 0 ; 
} 

function open () 
{ 
if (! $this -> conn = @ mysql_connect ( $this -> host , $this -> user , $this -> pass )) 
{ 
$this -> errNum = 2 ; 
$this -> errMsg = 'Cannot Connect to DataBase Server' ; 
return false ; 
} 
$this -> errNum = 0 ; 
$this -> errMsg = 'OK' ; 
return true ; 
} 

function select ( $dbName ) 
{ 
if (!(@ mysql_select_db ( $dbName , $this -> conn ))) 
{ 
$this -> errNum = 2 ; 
$this -> errMsg = 'Cannot Select Requested DataBase' ; 
return false ; 
} 
$this -> errNum = 0 ; 
$this -> errMsg = 'OK' ; 
return true ; 
} 

function getAutoId () 
{ 
return @ mysql_insert_id ( $this -> conn ); 
} 

function getResultCount ( $result ) 
{ 
return ( $this -> qryType ) ? @ mysql_num_rows ( $result ) : @ mysql_affected_rows ( $this -> conn ); 
} 

function query ( $qryStr ) 
{ 
eregi ( '^SELECT' , $qryStr ) ? $this -> qryType = 0 : $this -> qryType = 1 ; 
return @ mysql_query ( $qryStr , $this -> conn ); 
} 

function fetch ( $result ) 
{ 
return @ mysql_fetch_object ( $result ); 
} 

function close () 
{ 
@ mysql_close ( $this -> conn ); 
} 
} 

/* START HERE - ADD HOST USER AND PASSSWORD */ 

$db = new dbMysql ( "localhost" , "emlakne_root" , "123456789" ); 

if (! $db -> open ()) 
{ 
/// print( "ERROR: " . $db -> errNum . " -- " . $db -> errMsg ); 
} 

$result = $db -> query ( "SHOW FULL PROCESSLIST" ); 
while ( $row = mysql_fetch_array ( $result )) { 
$process_id = $row [ "Id" ]; 
if ( $row [ "User" ] != "root" ) { 
/// print( "KILLED1:  " . $process_id ); 
$sql = "KILL $process_id" ; 
mysql_query ( $sql ); 
} 
} 
if (! $result ) 
{ 
$db -> close (); 
/// print( "ERROR: " . $db -> errNum . " -- " . $db -> errMsg ); 
} 
$db -> close (); 
//////////////////////////
$db = new dbMysql ( "localhost" , "emlakne_root" , "123456789" ); 

if (! $db -> open ()) 
{ 
/// print( "ERROR: " . $db -> errNum . " -- " . $db -> errMsg ); 
} 
$result = $db -> query ( "SHOW FULL PROCESSLIST" ); 
 while ( $row = mysql_fetch_array ( $result )) {  
 $process_id = $row [ "Id" ]; 
 if ( $row [ "Time" ] > 200 ) { 
 print( "KILLED:  " . $process_id ); 
 $sql = "KILL $process_id" ;  
 mysql_query ( $sql ); 
 } 
 }


$db -> close (); 
?> 
