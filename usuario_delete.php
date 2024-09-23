<?php
//var_dump($_POST);
$id=$_GET["id"];


include("db.php");
$sql="DELETE FROM `usuarios` WHERE `id`='".$id."'";


$mysqli->query($sql);
header("location:usuario.php");
?>

