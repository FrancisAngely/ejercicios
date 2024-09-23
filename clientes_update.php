<?php
//var_dump($_POST);
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];

include("db.php");
$sql="UPDATE `clientes` SET `id`='".$id."',`nombre`='".$nombre."',`apellidos`='".$apellidos."',`updated_at`='".date("Y-m-d h:i:s")."' WHERE `id`='".$id."'";


$mysqli->query($sql);
header("location:clientes.php");
?>