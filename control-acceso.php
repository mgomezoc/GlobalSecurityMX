<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Control de Acceso - Accesos Electrónicos";
    $metaDescription = "Sistemas de control de acceso en Monterrey. Lectores de huella, reconocimiento facial, tarjetas de proximidad y controles biométricos para empresas.";
    $canonicalUrl = "https://globalsecuritymx.mx/control-acceso.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Sistemas de Control de Acceso",
        "description": "Instalación de controles de acceso biométricos, lectores de huella, reconocimiento facial y tarjetas de proximidad.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de control de acceso"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="controlAcceso" class="section">
        <h1>Sistemas de Control de Acceso</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Controles de Acceso Electrónicos</h2>
                        <p>Actualmente los controles de acceso ofrecen una gran variedad de opciones en el mercado de la seguridad básica y profesional. Es importante considerar qué nivel de seguridad realmente necesitas para elegir el sistema adecuado.</p>
                        <p>Contamos con accesos autónomos que se controlan de forma independiente, paneles de control que se conectan a través de un periférico donde la información queda respaldada en un lugar seguro. También ofrecemos varias opciones de lectura como reconocimiento facial, código, tarjetas de proximidad, huella dactilar y sistemas combinados.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/controlAcceso/banner/1.jpg" class="cut" alt="Control de acceso biométrico" />
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
                    <?php include("Views/Servicios/_cctv.php");?>
                </div>
                <div class="col-md-4">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
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
