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
                    <a href="proveedores_new.php" class="btn btn-primary">Nuevo</a>
                </div>
                <?php
                include("db.php");
                ?>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Razon Social</th>
                        <th>Nombre Comercial</th>
                        <th>cif</th>
                        <th>formapago</th>
                        <th>acciones</th>
                    </tr>
                    <?php
                    $sql = "SELECT `id`, `razon_social`, `nombre_comercial`, `cif`, `formapago`, `created_at`, `updated_at` FROM `proveedores` WHERE 1";
                    $query = $mysqli->query($sql);
                    if ($query->num_rows > 0) {
                        while ($fila = $query->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["razon_social"]; ?></td>
                                <td><?php echo $fila["nombre_comercial"]; ?></td>
                                <td><?php echo $fila["cif"]; ?></td>
                                <td><?php echo $fila["formapago"]; ?></td>
                                <td>
                                    <a href="proveedor_edit.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="proveedor_delete.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-eraser"></i></a>
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