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
    <section id="barrerasVehiculares" class="section">
        <h1>Barreras Vehiculares</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h2>Barreras Vehiculares</h2>
                        <p>El sistemas de acceso vehicular es uno de los puntos importantes para el acceso controlado ya que podemos definir quien tiene o no acceso a nuestras instalaciones, definido la seguridad de tanto de los residentes como la de los vehículos. ya que se colocan sistemas de seguridad tales como fotoceldas, sensores de masa, y poncha llantas para evitar golpes inesperados.</p>
                    </div>
                    <div class="skitter with-dots">
                        <ul>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/1.png" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/2.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/3.png" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/4.jpg" class="cut" />
                                </a>
                            </li>
                            <li>
                                <a href="#cut">
                                    <img src="img/barrerasVehiculares/banner/5.png" class="cut" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h3>Funcionalidades</h3>
                        <p>El acceso vehicular es una de las mejores herramientas para el acceso controlado y desatendido para los personas de seguridad ya que tenemos la funcionalidad de poder mezclar las funciones delas barreras con controles de acceso y lectoras de larga distancia,asi como detectores de presencia vehicular.</p>
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
