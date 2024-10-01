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
                    <h1 class="h2">Alta Direcciòn Proveedor</h1>

                </div>
                <div class="col-4">
                    <form action="dirproveedor_insert.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="id_proveedor" class="form-label">Proveedor</label>
                            <select class="form-control" id="id_proveedor" name="id_proveedor">
                                <option></option>

                                <?php
                                include("db.php");
                                $sql = "SELECT `id`, `razon_social`, `nombre_comercial`, `cif`, `formapago`, `created_at`, `updated_at` FROM `proveedores` WHERE 1";

                                $query = $mysqli->query($sql);
                                if ($query->num_rows > 0) {
                                    while ($fila = $query->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $fila["id"]; ?>"><?php echo $fila["razon_social"]; ?>-<?php echo $fila["cif"]; ?></option>
                                <?php }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="provincia" class="form-label">Provincia</label>
                            <select class="form-control" name="provincia" id="provincia">
                                <option></option>
                                <?php
                                $sqlProvincias = "SELECT `id`, `provincia`, `created_at`, `updated_at` FROM `provincias` WHERE 1 ORDER BY provincia asc";
                                $resultProv = $mysqli->query($sqlProvincias);
                                if ($resultProv->num_rows > 0) {
                                    while ($filaProv = $resultProv->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $filaProv["id"]; ?>"><?php echo $filaProv["provincia"]; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <select type="text" class="form-control" name="localidad" id="localidad">
                            <option></option>
                            </select>
                            
                        </div>


                        <div class="mb-3">
                            <label for="cp" class="form-label">Cp</label>
                            <input type="text" class="form-control" name="cp" id="cp" placeholder="cp">
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

    <script>
        $(document).ready(function() {
            $(".select2").select2({theme: "classic"}); 

            $("#provincia").click(function() {
                let provincia = $("#provincia").val();
                $.ajax({
                    data: {
                        provincia: provincia
                    },
                    method: "POST",
                    url: "localidades_provincia.php",
                    success: function(result) {
                        $("#localidad").html(result);
                    }

                });
            });
        });
    </script>
</body>

</html>