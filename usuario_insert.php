<?php
//var_dump($_POST);

$username=$_POST["username"];
$pass=$_POST["pass"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$email=$_POST["email"];

include("db.php");
$sql="INSERT INTO `usuarios`(`id`, `username`, `pass`, `nombre`, `apellidos`, `email`, `created_at`, `updated_at`) VALUES (";
$sql.="'NULL'";
$sql.=",'".$username."'";
$sql.=",'".$pass."'";
$sql.=",'".$nombre."'";
$sql.=",'".$apellidos."'";
$sql.=",'".$email."'";
$sql.=",'".date("Y-m-d h:i:s")."'";
$sql.=",'".date("Y-m-d h:i:s")."'";
$sql.=")";

$mysqli->query($sql);
header("location:usuario.php");
?>