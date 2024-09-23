<?php
//var_dump($_POST);

$producto = $_POST["producto"];
$imagen = $_FILES["imagen"];
$precio = $_POST["precio"];
$iva = $_POST["iva"];
$stock = $_POST["stock"];

include("db.php");
$sql = "INSERT INTO `productos`(`id`, `producto`, `imagen`, `precio`, `iva`, `stock`, 
`created_at`, `update_at`) VALUES (";
$sql .= "'NULL'";
$sql .= ",'" . $producto . "'";
$sql .= ",' '";
$sql .= ",'" . $precio . "'";
$sql .= ",'" . $iva . "'";
$sql .= ",'" . $stock . "'";
$sql .= ",'" . date("Y-m-d h:i:s") . "'";
$sql .= ",'" . date("Y-m-d h:i:s") . "'";
$sql .= ")";

$mysqli->query($sql);

$imagen = $_FILES["imagen"];


if ($imagen["name"] != "") {
    $target_dir = "productos/";

    $imageTypeFile = strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));

    $target_file = $target_dir . "producto" . "_" . $mysqli->insert_id . ".png";
    if (move_uploaded_file($imagen["tmp_name"], $target_file)) {

        $sqlImg = "UPDATE `productos` SET `imagen`='" . $target_file . "'";
        $sqlImg .= " WHERE `id`=" . $mysqli->insert_id;
        $mysqli->query($sqlImg);
    }
}

header("location:productos.php");
