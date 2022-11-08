<?php 
//To establish a connection with the DB

$host="mysql-server";
$hostUser="root";
$hostPassword="secret";
$dbName="UserDataBase";
$connect= mysqli_connect($host,$hostUser,$hostPassword,$dbName);

?>