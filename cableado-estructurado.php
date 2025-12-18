<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Cableado Estructurado y Fibra Óptica";
    $metaDescription = "Instalación de cableado estructurado y fibra óptica en Monterrey. Redes de datos, enlaces punto a punto, sistemas WiFi empresarial y telecomunicaciones.";
    $canonicalUrl = "https://globalsecuritymx.mx/cableado-estructurado.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Cableado Estructurado y Fibra Óptica",
        "description": "Instalación de cableado estructurado, fibra óptica, redes de datos, enlaces punto a punto y sistemas WiFi empresarial.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de redes y telecomunicaciones"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="cableadoEstructurado">
        <h1>Cableado Estructurado y Redes de Datos</h1>
        <div class="container cableadoEstructurado-content">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Infraestructura de Telecomunicaciones</h2>
                        <p>El cableado estructurado es el sistema de cables, conectores, canalizaciones y dispositivos que permiten establecer una infraestructura de telecomunicaciones en un edificio.</p>
                        <p>Ofrecemos soluciones completas en fibra óptica, enlaces punto a punto, antenas repetidoras, access points (AP) y sistemas WiFi empresariales para equipos inalámbricos.</p>
                    </div>
                </div>
            </div>
            <a href="contacto.php" class="btn btn-primary">Solicitar Cotización</a>
            <aside id="servicios" class="row">
                <div class="col-md-4">
                    <?php include("Views/Servicios/_cctv.php");?>
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
