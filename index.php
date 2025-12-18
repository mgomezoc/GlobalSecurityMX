<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php
    // Variables SEO para esta página
    $pageTitle = "Cámaras de Seguridad y CCTV en Monterrey";
    $metaDescription = "Instalación profesional de cámaras de seguridad, sistemas CCTV, control de acceso y alarmas en Monterrey y área metropolitana. Cotización sin compromiso.";
    $canonicalUrl = "https://globalsecuritymx.mx/";
    ?>
    
    <?php require("Views/Shared/head.php");?>
    <title><?php echo $pageTitle; ?> | Global Security MX</title>
    
    <!-- Preload LCP image (primera imagen del slider) -->
    <link rel="preload" as="image" href="img/slider/slide_1.webp" type="image/webp">
    <link rel="preload" as="image" href="img/slider/slide_1.jpg" imagesrcset="img/slider/slide_1-mobile.jpg 600w, img/slider/slide_1.jpg 1200w" imagesizes="100vw">
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    
    <!-- Hero Section con H1 -->
    <section id="hero">
        <h1 class="sr-only">Cámaras de Seguridad y Sistemas CCTV en Monterrey - Global Security MX</h1>
        <div id="skitter-container" class="text-center">
            <div class="skitter skitter-large with-dots">
                <ul>
                    <li>
                        <a href="sistema-seguridad-cctv.php" title="Ver sistemas de CCTV">
                            <picture>
                                <source 
                                    type="image/webp"
                                    srcset="img/slider/slide_1-mobile.webp 600w, img/slider/slide_1.webp 1200w"
                                    sizes="100vw">
                                <img 
                                    src="img/slider/slide_1.jpg"
                                    srcset="img/slider/slide_1-mobile.jpg 600w, img/slider/slide_1.jpg 1200w"
                                    sizes="100vw"
                                    alt="Sistemas de cámaras de seguridad CCTV"
                                    width="1200"
                                    height="600"
                                    class="slide"
                                    fetchpriority="high">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="control-acceso.php" title="Ver control de acceso">
                            <picture>
                                <source 
                                    type="image/webp"
                                    srcset="img/slider/slide_2-mobile.webp 600w, img/slider/slide_2.webp 1200w"
                                    sizes="100vw">
                                <img 
                                    src="img/slider/slide_2.jpg"
                                    srcset="img/slider/slide_2-mobile.jpg 600w, img/slider/slide_2.jpg 1200w"
                                    sizes="100vw"
                                    alt="Cámaras de seguridad profesionales Panasonic"
                                    width="1200"
                                    height="600"
                                    class="slide"
                                    loading="lazy">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="seguridad-perimetral.php" title="Ver seguridad perimetral">
                            <picture>
                                <source 
                                    type="image/webp"
                                    srcset="img/slider/slide_3-mobile.webp 600w, img/slider/slide_3.webp 1200w"
                                    sizes="100vw">
                                <img 
                                    src="img/slider/slide_3.jpg"
                                    srcset="img/slider/slide_3-mobile.jpg 600w, img/slider/slide_3.jpg 1200w"
                                    sizes="100vw"
                                    alt="Control de acceso biométrico y cámaras domo"
                                    width="1200"
                                    height="600"
                                    class="slide"
                                    loading="lazy">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="alarmas_Sistemas-incendio.php" title="Ver alarmas y sistemas contra incendio">
                            <picture>
                                <source 
                                    type="image/webp"
                                    srcset="img/slider/slide_4-mobile.webp 600w, img/slider/slide_4.webp 1200w"
                                    sizes="100vw">
                                <img 
                                    src="img/slider/slide_4.jpg"
                                    srcset="img/slider/slide_4-mobile.jpg 600w, img/slider/slide_4.jpg 1200w"
                                    sizes="100vw"
                                    alt="Sistema de alarma y panel de control"
                                    width="1200"
                                    height="600"
                                    class="slide"
                                    loading="lazy">
                            </picture>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Sección de Servicios -->
    <section id="servicios" class="container">
        <h2 class="text-center mb-4">Nuestros Servicios de Seguridad Electrónica</h2>
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
    setMenuActive("Inicio");    
    </script>
</body>

</html>
