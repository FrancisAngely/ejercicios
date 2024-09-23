<?php
$host="localhost:3306";
$user="root";
$password="";
$database="dashboard1";

$mysqli=new 
mysqli($host,$user,$password,$database);

if(mysqli_connect_error()){
printf("Fallo la conexion: %s\n", $mysqli->connect_error);
exit(); 
}
$mysqli->set_charset("utf8")
?>