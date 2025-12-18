<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Servicios de Seguridad Electrónica";
    $metaDescription = "Servicios de seguridad electrónica: cámaras CCTV, control de acceso, alarmas contra incendio, cableado estructurado, cercas eléctricas y barreras vehiculares.";
    $canonicalUrl = "https://globalsecuritymx.mx/servicios.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="servicios" class="container">
        <div class="row">
            <div class="col-md-6">
                <?php include("Views/Servicios/_cctv.php");?>
            </div>
            <div class="col-md-6">
                <?php include("Views/Servicios/_cableado.php");?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php include("Views/Servicios/_alarmaIncendio.php");?>
            </div>
            <div class="col-md-6">
                <?php include("Views/Servicios/_seguridadPerimetral.php");?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php include("Views/Servicios/_barrerasVehiculares.php");?>
            </div>
            <div class="col-md-6">
                <?php include("Views/Servicios/_controlesAccesos.php");?>
            </div>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
    setMenuActive("Servicios");
    </script>
</body>

</html>
