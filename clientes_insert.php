<?php
//var_dump($_POST);

$Nombre=$_POST["nombre"];
$Apellidos=$_POST["apellidos"];
include("db.php");
$sql="INSERT INTO `clientes`(`id`, `nombre`, `apellidos`, `created_at`, `updated_at`) VALUES (";
$sql.="'NULL'";
$sql.=",'".$nombre."'";
$sql.=",'".$apellidos."'";
$sql.=",'".date("Y-m-d h:i:s")."'";
$sql.=",'".date("Y-m-d h:i:s")."'";
$sql.=")";

$mysqli->query($sql);
header("location:clientes.php");
?>