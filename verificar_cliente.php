<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];

$sql = " SELECT `id`, `nombre`, `apellidos`, `created_at`, `updated_at` FROM `clientes` WHERE 1";
$sql .= " and `nombre`='" . $nombre . "'";
$sql .= " and `apellidos`='" . $apellidos . "'";

include("db.php");

$query = $mysqli->query($sql);

//echo ($query->num_rows > 0) ? "si" : "no";
if ($query->num_rows > 0) {
    //usuario valido
    $fila = $query->fetch_assoc();

    session_start();
    $_SESSION["nombre"] = $fila["nombre"];
    $_SESSION["apellidos"] = $fila["apellidos"];

    echo 1;
} else {

    echo 0;
}
