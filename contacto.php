<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Contacto - Cotiza tu Sistema de Seguridad";
    $metaDescription = "Contáctanos para cotizar tu sistema de seguridad. Atención en Monterrey y área metropolitana. Llámanos al (81) 1806 8310 o envía tu mensaje.";
    $canonicalUrl = "https://globalsecuritymx.mx/contacto.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
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
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" id="correo" name="correo" class="form-control" placeholder="correo@tuempresa.com" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Tu teléfono">
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" id="asunto" name="asunto" class="form-control" value="Cotización" placeholder="Asunto" required>
                        </div>
                        <div class="form-group">
                            <label for="comentario">Comentario</label>
                            <textarea id="comentario" name="comentario" class="form-control" placeholder="¿En qué podemos ayudarte?"></textarea>
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
