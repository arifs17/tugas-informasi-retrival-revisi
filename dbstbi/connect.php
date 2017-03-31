<?php
$host='localhost';
$user='root';
$pass='';
$database='dbstbi';

error_reporting(E_ALL ^ E_DEPRECATED);$conn=mysql_connect($host,$user,$pass);
mysql_select_db($database);

?>
