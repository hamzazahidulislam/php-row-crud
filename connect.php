<?php 
$host ="localhost";
$dbUser ="alfin";
$dbpwd ="alfin";
$dbName="alfin";
$connect = mysqli_connect($host,$dbUser,$dbpwd,$dbName);
if($connect==false){
 echo "Database Not Found?";
}
