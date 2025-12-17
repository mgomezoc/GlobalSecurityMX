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
    <section id="seguridadPerimetral" class="section">
        <h1>Seguridad Perimetral</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Cercas Electrificadas</h2>
                        <p>Un Sistema de Cerca Electrificada está diseñado para proteger el perímetro de una propiedad, la ventaja es que es disuasivo y a la vez protege, ya que si alguien la toca, la cerca le dará una descarga y se activará la sirena, además si usted cuenta con un Sistema de Alarma se pueden enlazar y este nos mandará una señal de una posible intrusión.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/1.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/2.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/3.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/seguridadPerimetral/banner/4.jpg" class="cut" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h2>Control de rondines</h2>
                    <p>Los sistemas para control de rondines de vigilancia, o sistemas de control de rutas como también se les conoce permiten controlar las rondas de seguridad realizadas por los vigilantes, así como sus supervisores; permiten también realizar inspecciones en rutas definidas, verificación de rutas de distribución, inspecciones a equipos, permitiendo conocer la ruta o posición y actividades de la gente o artículos.</p>
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
