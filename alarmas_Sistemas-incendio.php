<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Alarmas y Sistemas Contra Incendio";
    $metaDescription = "Instalación de alarmas y sistemas contra incendio en Monterrey. Detectores de humo, sensores de movimiento, botones de pánico y monitoreo 24/7.";
    $canonicalUrl = "https://globalsecuritymx.mx/alarmas_Sistemas-incendio.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Alarmas y Sistemas Contra Incendio",
        "description": "Instalación de sistemas de alarma, detectores de humo, sensores de movimiento y sistemas contra incendio para hogares y empresas.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de alarmas y detección de incendio"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="alarmasSistemasIncendio" class="section">
        <h1>Alarmas y Sistemas Contra Incendio</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h2>Protección para tu Familia y Patrimonio</h2>
                        <p>Un sistema de alarma está diseñado para proteger a tu familia y patrimonio. Utilizamos dispositivos como sensores de movimiento, contactos magnéticos, botones de pánico, detectores de humo y detectores de ruptura de cristal.</p>
                        <p>Estos dispositivos envían señales periódicas al panel de control para garantizar su correcto funcionamiento en todo momento.</p>
                        <img src="img/alarmasSistemasIncendio/1.png" alt="Sistema de alarma contra incendio" width="100%">
                    </div>
                </div>
            </div>
            <a href="contacto.php" class="btn btn-primary">Solicitar Cotización</a>
            <aside id="servicios" class="row">
                <div class="col-md-4">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_cctv.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
                </div>
            </aside>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
    setMenuActive("Servicios");
    </script>
</body>

</html>
