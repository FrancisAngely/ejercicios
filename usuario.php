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
                    <h1 class="h2">Usuario</h1>
                    <a href="usuario_new.php" class="btn btn-primary">Nuevo</a>
                </div>
                <?php
                include("db.php");
                ?>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>user</th>
                        <th>pass</th>
                        <th>nombre</th>
                        <th>apellidos</th>
                        <th>email</th>
                        <th>acciones</th>
                    </tr>
                    <?php
                    $sql = "SELECT `id`, `username`, `pass`, `nombre`, `apellidos`, `email`, `created_at`, `updated_at` FROM `usuarios` WHERE 1";
                    $query = $mysqli->query($sql);
                    if ($query->num_rows > 0) {
                        while ($fila = $query->fetch_assoc()) {
                            //var_dump($fila);
                            //  echo "<tr><td>".$fila["id"]."</td><td>".$fila["nombre"]."</td><td>".$fila["apellidos"]."</td></tr>";
                    ?>
                            <tr>
                                <td><?php echo $fila["id"]; ?></td>
                                <td><?php echo $fila["username"]; ?></td>
                                <td><?php echo base64_encode($fila["pass"]); ?></td>
                                <td><?php echo $fila["nombre"]; ?></td>
                                <td><?php echo $fila["apellidos"]; ?></td>
                                <td><?php echo $fila["email"]; ?></td>
                                <td>
                                    <a href="usuario_edit.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="usuario_delete.php?id=<?php echo $fila["id"]; ?>"><i class="fa-solid fa-eraser"></i></a>
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