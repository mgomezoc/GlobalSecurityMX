<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GLOBAL SECURITY | Seguridad electronica y comunicaciones</title>
    <?php require("Views/Shared/head.php");?>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="contacto" class="section">
        <h1>Contacto</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form id="frmContacto" method="post" action='email.php'>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="@nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="correo@tuempresa.com" required>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" name="telefono" class="form-control" placeholder="telefono">
                        </div>
                        <div class="form-group">
                            <label>Asunto</label>
                            <input type="text" name="asunto" class="form-control" value="Comentario" placeholder="@asunto" required>
                        </div>
                        <div class="form-group">
                            <label>Comentario</label>
                            <textarea name="comentario" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>
            <aside id="servicios" class="row">
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cctv.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
                </div>
            </aside>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
    setMenuActive("Contacto");

    </script>
</body>

</html>
