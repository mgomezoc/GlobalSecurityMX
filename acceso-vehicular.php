<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Barreras Vehiculares y Plumas de Acceso";
    $metaDescription = "Instalación de barreras vehiculares y plumas para fraccionamientos en Monterrey. Control de acceso vehicular automatizado con fotoceldas y sensores.";
    $canonicalUrl = "https://globalsecuritymx.mx/acceso-vehicular.php";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- JSON-LD Servicio específico -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Barreras Vehiculares y Control de Acceso",
        "description": "Instalación de barreras vehiculares, plumas automáticas y sistemas de control de acceso para fraccionamientos y estacionamientos.",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Global Security MX"
        },
        "areaServed": {
            "@type": "City",
            "name": "Monterrey"
        },
        "serviceType": "Instalación de barreras vehiculares"
    }
    </script>
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section id="barrerasVehiculares" class="section">
        <h1>Barreras Vehiculares y Plumas de Acceso</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Control de Acceso Vehicular</h2>
                        <p>El sistema de acceso vehicular es uno de los puntos más importantes para el control de entradas, ya que permite definir quién tiene o no acceso a las instalaciones, garantizando la seguridad tanto de los residentes como de los vehículos.</p>
                        <p>Instalamos sistemas de seguridad complementarios como fotoceldas, sensores de masa y poncha llantas para evitar incidentes.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/1.png" class="cut" alt="Barrera vehicular automática" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/2.jpg" class="cut" alt="Pluma de acceso" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/3.png" class="cut" alt="Control de acceso vehicular" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/4.jpg" class="cut" alt="Sistema de barreras" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/5.png" class="cut" alt="Plumas para fraccionamientos" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h2>Funcionalidades</h2>
                        <p>El acceso vehicular es una de las mejores herramientas para el control desatendido, liberando al personal de seguridad. Ofrecemos la posibilidad de integrar las barreras con controles de acceso, lectoras de largo alcance y detectores de presencia vehicular.</p>
                    </div>
                    <a href="contacto.php" class="btn btn-primary">Solicita un Asesor</a>
                </div>
            </div>
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
