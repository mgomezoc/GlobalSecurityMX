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
    <section id="nosotros">
        <h1>Nosotros</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <p>Global security Mx es una empresa Mexicana joven con gran experiencia en comunicación y seguridad electronica.</p>
                        <p>Contamos con diferentes ramos , para brindarle soluciones en comunicaciones , cableado estructurado, cámaras de seguridad, alarmas contra incendio, seguridad perimetral , controles de acceso y barreras vehiculares, entre otros servicios , garantizando una integración completa de sus sistemas y mejorar los tiempos de sus necesidades.</p>
                        <p>Somos un equipo que trabaja con valores, que conoce las necesidades actuales y se esfuerza diariamente por ofrecer lo más avanzado en tecnología, soporte técnico altamente especializado, un trato humano amable y el respaldo que su empresa demanda.</p>
                        <div data-aos="fade-down">
                            <img src="img/nosotros.jpg" alt="nosotros" class="rimg">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h3>Misión</h3>
                        <p>Brindar productos y servicios que generen a nuestros clientes una solución a sus necesidades, esforzándonos constantemente por exceder sus expectativas con calidad en el trabajo, tiempo esperado y servicio esmerado.</p>
                    </div>
                    <div>
                        <h3>Visión</h3>
                        <p>Consolidarnos como una organización en constante desarrollo, siendo parte activa del crecimiento del comercio y la industria.</p>
                        <p>Creemos en nuestros VALORES como la esencia para cumplir con los objetivos que nos trazamos, trabajamos con pasión para ser una organización de excelencia:</p>
                        <ul>
                            <li>Sentido de responsabilidad</li>
                            <li>Honestidad</li>
                            <li>Organización</li>
                            <li>Pertenencia e Identificación</li>
                            <li>Unión y Trabajo en Equipo</li>
                            <li>Innovación</li>
                        </ul>
                    </div>
                </div>
            </div>
            <aside id="servicios" class="row">
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cableado.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_cctv.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_alarmaIncendio.php");?>
                </div>
                <div class="col-md-3">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
                </div>
            </aside>
        </div>
    </section>
    <?php require("Views/Shared/footer.php");?>
    <?php require("Views/Shared/scripts.php");?>
    <script>
        setMenuActive("Nosotros");
    </script>
</body>

</html>
