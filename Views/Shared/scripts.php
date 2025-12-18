<!-- ==============================================
     Scripts - Global Security MX
     Optimizado para performance
     ============================================== -->

<!-- Font Awesome (async ya está bien) -->
<script async src="https://use.fontawesome.com/9ca1c43714.js"></script>

<!-- jQuery - Requerido primero para plugins -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Tether - Requerido por Bootstrap 4 Alpha para tooltips -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Plugins del sitio -->
<script src="js/plugins.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- AOS - Animaciones al scroll -->
<script src="js/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 50
    });
</script>

<!-- Skitter Slider -->
<script src="js/jquery.skitter.min.js"></script>

<!-- Main JS del sitio -->
<script src="js/main.js"></script>

<!-- Zendesk Chat (carga diferida para no bloquear) -->
<script>
    // Cargar Zendesk después de que la página esté lista
    window.addEventListener('load', function() {
        setTimeout(function() {
            var z = document.createElement('script');
            z.type = 'text/javascript';
            z.async = true;
            z.src = 'https://v2.zopim.com/?4cyYmcZEeKsQLMCg4JPakZFnkDjn0JS4';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(z, s);
        }, 2000); // Espera 2 segundos después del load
    });
</script>
