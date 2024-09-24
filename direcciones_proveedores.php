<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php include("head.php"); ?>

<body>
    <?php include("iconos.php"); ?>

    <?php include("header.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <?php include("menu.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Proveedor</h1>
                    <a href="direccionesprov_new.php" class="btn btn-primary">Nuevo</a>
                </div>
                <?php
                include("db.php");
                ?>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Id_Proveedor</th>
                        <th>Direccion</th>
                        <th>Localidad</th>
                        <th>Provincia</th>
                        <th>Cp</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    $sql = "SELECT `id`, `id_proveedor`, `direccion`, `localidad`, `provincia`, `cp`, `created_at`, `updated_at` FROM `direcciones_proveedores` WHERE 1";
                    $query = $mysqli->query($sql);
                    if ($query->num_rows > 0) {
                        while ($fila = $query->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["id_proveedor"]; ?></td>
                                <td><?php echo $fila["direccion"]; ?></td>
                                <td><?php echo $fila["localidad"]; ?></td>
                                <td><?php echo $fila["provincia"]; ?></td>
                                <td><?php echo $fila["cp"]; ?></td>
                                <td>
                                    <a href="dirproveedor_edit.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="dirproveedor_delete.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-eraser"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </table>
            </main>
        </div>
    </div>
    <?php include("script.php"); ?>
</body>

</html>