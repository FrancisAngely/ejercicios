<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php include("head.php"); ?>

<body>
    <?php include("iconos.php"); ?>

    <?php include("header.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <?php include("menu.php"); ?>
            <?php
            include("db.php");
            $sql = "SELECT `id`, `id_proveedor`, `direccion`, `localidad`, `provincia`, `cp`, `created_at`, `updated_at` FROM `direcciones_proveedores` WHERE `id`=" . $_GET["id"];
            $query = $mysqli->query($sql);
            if ($query->num_rows > 0) {
                $fila = $query->fetch_assoc();
            }
            ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editar Direccion Proveedores</h1>

                </div>
                <div class="col-4">
                    <form action="dirproveedor_update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">

                        <div class="mb-3">
                            <label for="id_proveedor" class="form-label">Id proveedor</label>
                            <input type="id_proveedor" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="id_proveedor">
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" name="direccion" placeholder="direccion">
                        </div>

                        <div class="mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" name="localidad" name="localidad" placeholder="localidad">
                        </div>


                        <div class="mb-3">
                            <label for="provincia" class="form-label">Provincia</label>
                            <input type="text" class="form-control" name="provincia" name="provincia" placeholder="provincia">
                        </div>

                        <div class="mb-3">
                            <label for="cp" class="form-label">Cp</label>
                            <input type="text" class="form-control" name="cp" name="cp" placeholder="cp">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="form-control" value="Aceptar">
                        </div>

                    </form>
                </div>



            </main>
        </div>
    </div>
    <?php include("script.php"); ?>
</body>

</html>