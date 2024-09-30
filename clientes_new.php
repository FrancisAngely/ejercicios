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
          <h1 class="h2">Alta cliente</h1>
          

        </div>
        <span id="errorV" class="text-danger"></span>
        <br>
        <br>
        <div class="col-4">
          <form action="clientes_insert.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos">
            </div>

            <div class="mb-3">
            <!-- <button class="btn btn-primary w-100 py-2" id="btnValidar" type="button">Aceptar</button>-->

              <input type="button" class="form-control" id="btnValidar" value="Aceptar">
            </div>

          </form>
        </div>
      </main>

      <style>
        .borderError {
            border: 1px solid #ff0000;
        }
    </style>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <Script src="js/jquery-3.7.1.js"></Script>
    <script>
        $(document).ready(function() {
            $("#btnValidar").click(function() {
                let nombre = $("#nombre").val();
                let apellidos = $("#apellidos").val();
                let error = 0;

                if (nombre == "") {
                    error = 1;
                    $("#nombre-error").html("Debe introducir un nombre de cliente");
                    $("#nombre").addClass("borderError");
                }
                if (apellidos == "") {
                    error = 1;
                    $("#apellidos-error").html("Debe introducir los apellidos");
                    $("#apellidos").addClass("borderError");

                }
                if (error == 0) {
                    $.ajax({
                        data: {
                          nombre: nombre,
                          apellidos: apellidos
                        },
                        method: "POST",
                        url: "verificar_cliente.php",
                        success: function(result) {
                            if (result == 0) {
                                $("#errorV").html("Nombre y apellidos son incorrectos");
                            } else {
                                location.href = "dashboard1.php";
                            }
                        },
                    });
                }

            });

            /*$("#username").change(function() {
              alert("The text has been changed.");
            });*/

            $("#nombre").on('keyup', function() {
                $("#errorV").html("");
                var value = $(this).val().length;
                if (value > 0) {
                    $("#nombre-error").html("");
                    $("#nombre").removeClass("borderError");

                } else {
                    $("#nombre-error").html("Debe introducir un nombre de usuario");
                    $("#nombre").addClass("borderError");
                }

            })
            $("#apellidos").on('keyup', function() {
                $("#errorV").html("");
                var value = $(this).val().length;
                if (value > 0) {
                    $("#apellidos-error").html("");
                    $("#apellidos").removeClass("borderError");

                } else {
                    $("#apellidos-error").html("Debe introducir un apellido");
                    $("#apellidos").addClass("borderError");
                }

            })

        });
    </script>
    </div>
  </div>
  <?php include("script.php"); ?>
</body>

</html>