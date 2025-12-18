<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Cámaras de Seguridad y Sistemas CCTV";
    $metaDescription = "Instalación de cámaras de seguridad y sistemas CCTV en Monterrey. Cámaras IP, domo, PTZ, térmicas y más. Monitoreo remoto desde tu celular.";
    $canonicalUrl = "https://globalsecuritymx.mx/sistema-seguridad-cctv.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Instalación de Cámaras de Seguridad y CCTV",
        "description": "Instalación profesional de sistemas de videovigilancia CCTV con cámaras IP, domo, PTZ, térmicas y monitoreo remoto.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de sistemas de seguridad"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="cctv" class="section">
        <h1>Sistemas de Cámaras de Seguridad CCTV</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Videovigilancia Profesional</h2>
                        <p>Contando con una amplia gama de cámaras para todo tipo de aplicaciones con cable tradicional y cámaras IP. Ofrecemos cámaras tipo bala, domo, térmicas, domos PTZ, ocultas y antiexplosión, entre otras opciones para tu proyecto.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/cctv/banner/1.jpg" class="cut" alt="Sistema CCTV instalado" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/cctv/banner/2.jpg" class="cut" alt="Cámaras de seguridad" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/cctv/banner/3.jpg" class="cut" alt="Monitoreo de cámaras" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/cctv/banner/4.png" class="cut" alt="DVR y NVR" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="contacto.php" class="btn btn-primary">Solicitar Cotización</a>
            <aside id="servicios" class="row">
                <div class="col-md-4">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
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
