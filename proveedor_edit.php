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
            $sql = "SELECT `id`, `razon_social`, `nombre_comercial`, `cif`, `formapago`, `created_at`, `updated_at` FROM `proveedores`  WHERE `id`=" . $_GET["id"];
            $query = $mysqli->query($sql);
            if ($query->num_rows > 0) {
                $fila = $query->fetch_assoc();
            }
            ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editar Proveedor</h1>

                </div>
                <div class="col-4">
                    <form action="proveedor_update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">


                        <div class="mb-3">
                            <label for="razon_social" class="form-label">Razon Social</label>
                            <input type="text" class="form-control" name="razon_social" name="razon_social" placeholder="razon_social">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_comercial" class="form-label">Nombre Comercial</label>
                            <input type="nombre_comercial" class="form-control" id="nombre_comercial" name="nombre_comercial" placeholder="nombre_comercial">
                        </div>

                        <div class="mb-3">
                            <label for="cif" class="form-label">cif</label>
                            <input type="text" class="form-control" name="cif" name="cif" placeholder="cif">
                        </div>

                        <div class="mb-3">
                            <label for="formapago" class="form-label">forma de pago</label>
                            <input type="text" class="form-control" name="formapago" name="formapago" placeholder="formapago">
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