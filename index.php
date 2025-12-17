<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php require("Views/Shared/head.php");?>
    <title>GLOBAL SECURITY | Seguridad electronica y comunicaciones</title>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <div id="skitter-container" class="text-center">
        <div class="skitter skitter-large with-dots">
            <ul>
                <li>
                    <a href="#cut">
                        <img src="img/slider/slide_1.jpg" class="slide" />
                    </a>
                </li>
                <li>
                    <a href="#cut">
                        <img src="img/slider/slide_2.jpg" class="slide" />
                    </a>
                </li>
                <li>
                    <a href="#cut">
                        <img src="img/slider/slide_3.jpg" class="slide" />
                    </a>
                </li>
                <li>
                    <a href="#cut">
                        <img src="img/slider/slide_4.jpg" class="slide" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
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
    setMenuActive("Inicio");    
    </script>
</body>

</html>
