<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GLOBAL SECURITY | Seguridad electronica y comunicaciones</title>
    <?php require("Views/Shared/head.php");?>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php require("Views/Shared/header.php");?>
    <section class="section" id="barrerasVehiculares">
        <h1>Barreras Vehiculares</h1>
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
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
</body>

</html>
