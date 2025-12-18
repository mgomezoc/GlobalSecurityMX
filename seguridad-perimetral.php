<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Seguridad Perimetral - Cercas Eléctricas";
    $metaDescription = "Instalación de cercas eléctricas y seguridad perimetral en Monterrey. Cercas electrificadas, control de rondines y sistemas de protección perimetral.";
    $canonicalUrl = "https://globalsecuritymx.mx/seguridad-perimetral.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Seguridad Perimetral y Cercas Eléctricas",
        "description": "Instalación de cercas eléctricas, sistemas de seguridad perimetral y control de rondines para protección de propiedades.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de seguridad perimetral"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="seguridadPerimetral" class="section">
        <h1>Seguridad Perimetral</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Cercas Electrificadas</h2>
                        <p>Un sistema de cerca electrificada está diseñado para proteger el perímetro de una propiedad. La ventaja es que funciona como elemento disuasivo y de protección: si alguien la toca, recibirá una descarga y se activará la sirena.</p>
                        <p>Si cuentas con un sistema de alarma, podemos enlazarlos para recibir una señal ante una posible intrusión.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/1.jpg" class="cut" alt="Cerca eléctrica instalada" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/2.jpg" class="cut" alt="Sistema de seguridad perimetral" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/3.jpg" class="cut" alt="Cercas electrificadas" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/4.jpg" class="cut" alt="Protección perimetral" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h2>Control de Rondines</h2>
                    <p>Los sistemas de control de rondines permiten supervisar las rondas de seguridad realizadas por los vigilantes y supervisores. También sirven para inspecciones de rutas definidas, verificación de rutas de distribución e inspecciones a equipos, permitiendo conocer la posición y actividades del personal.</p>
                </div>
            </div>
            <a href="contacto.php" class="btn btn-primary">Solicitar un Asesor</a>
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
