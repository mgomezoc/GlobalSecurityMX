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
    <section id="cableadoEstructurado">
        <h1>Cableado Estructurado</h1>
        <div class="container cableadoEstructurado-content">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Cableado Estructurado</h2>
                        <p>Se conoce como cableado estructurado al sistema de cables, conectores, canalizaciones y dispositivos que permiten establecer una infraestructura de telecomunicaciones en un edificio. La instalación y las características del sistema deben cumplir con ciertos estándares para formar parte de la condición de cableado estructurado.</p>
                        <div class="skitter with-dots">
                            <ul>
                                <li>
                                    <a href="#cut">
                                        <img src="img/cableadoEstructurado/banner/1.JPG" class="cut" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#cut">
                                        <img src="img/cableadoEstructurado/banner/2.jpg" class="cut" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#cut">
                                        <img src="img/cableadoEstructurado/banner/3.png" class="cut" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#cut">
                                        <img src="img/cableadoEstructurado/banner/4.jpg" class="cut" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Funcionalidades</h3>
                    <p>Actualmente en los estándares de cableados de red e instalaciones de fibra óptica, se necesitan de test de calidad de comunicacion, etiquetados, identificaciones y manejo adecuado de los cableados para no ser dañados,así mismo contando con los cables con las mejores categorias 6, 6a, 7, y todos sus demás complementos para su apto flujo de velocidad.</p>
                    <img src="img/cableadoEstructurado/cableado3.jpg" alt="cableadoEstructurado" class="cableadoEstructurado-img">
                    <h3>Como Funciona?</h3>
                    <p>Todos sabemos como trabaja el internet a mayor es tu paquete de datos mejor descarga de información, pero que pasa si te entregaran tu servicio con un cable degradado y sus tomas viejas y obsoletas entonces pues seria deficiente tu velocidad de navegación. bueno esto se basa en el mismo sistema en los cableados por ejemplo la fibra óptica se pueden manejar velocidades de hasta 10gb/s un cable categoría 5e la velocidad es de 100 mhz y la de la categoría 6 es de 250mhz, entonces cual crees que tenga menos perdiada de datos. todo esto se basa en el armado del cable y su correcta instalación.</p>
                </div>
            </div>
            <aside id="servicios" class="row">
                <div class="col-md-4">
                    <?php include("Views/Servicios/_seguridadPerimetral.php");?>
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
