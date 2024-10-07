<?php

$id_proveedor = $_POST["id_proveedor"];
$direccion = $_POST["direccion"];
$localidad = $_POST["localidad"];
$provincia = $_POST["provincia"];
$cp = $_POST["cp"];


include("db.php");
$sql = "INSERT INTO `direcciones_proveedores`(`id`, `id_proveedor`, `direccion`, `localidad`, `provincia`, `cp`, `created_at`, `updated_at`) VALUES (";
$sql .= "'NULL'";
$sql .= ",'" . $id_proveedor . "'";
$sql .= ",'" . $direccion . "'";
$sql .= ",'" . $provincia . "'";
$sql .= ",'" . $localidad . "'";
$sql .= ",'" . $cp . "'";
$sql .= ",'" . date("Y-m-d h:i:s") . "'";
$sql .= ",'" . date("Y-m-d h:i:s") . "'";
$sql .= ")";

if($mysqli->query($sql)) echo $mysqli->insert_id;
else 0;
//header("location:direcciones_proveedores.php");
?>
