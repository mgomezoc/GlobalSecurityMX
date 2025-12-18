<?php
// ==============================================
// Variables SEO con valores por defecto
// Estas variables se definen en cada página ANTES del require
// ==============================================

// Título de la página
if (!isset($pageTitle)) {
    $pageTitle = "Seguridad Electrónica y Comunicaciones";
}

// Meta description
if (!isset($metaDescription)) {
    $metaDescription = "Empresa de seguridad electrónica en Monterrey. Instalación de cámaras CCTV, control de acceso, alarmas contra incendio, cableado estructurado y cercas eléctricas.";
}

// URL canónica
if (!isset($canonicalUrl)) {
    $canonicalUrl = "https://globalsecuritymx.mx/";
}

// Tipo de página para Open Graph (website o article)
if (!isset($ogType)) {
    $ogType = "website";
}
?>

<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FLBEGNS3WE"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-FLBEGNS3WE');
</script>

<!-- SEO Meta Tags -->
<meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<!-- Viewport y compatibilidad -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/favicon/manifest.json">
<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#9a2720">
<link rel="shortcut icon" href="img/favicon/favicon.ico">
<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
<meta name="theme-color" content="#9a2720">

<!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?> | Global Security MX">
<meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<meta property="og:type" content="<?php echo $ogType; ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:image" content="https://globalsecuritymx.mx/img/og-image.jpg">
<meta property="og:site_name" content="Global Security MX">
<meta property="og:locale" content="es_MX">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?> | Global Security MX">
<meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<meta name="twitter:image" content="https://globalsecuritymx.mx/img/og-image.jpg">

<!-- Datos Estructurados: Organización (aparece en todas las páginas) -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Global Security MX",
        "description": "Empresa de seguridad electrónica y comunicaciones en Monterrey, Nuevo León",
        "url": "https://globalsecuritymx.mx",
        "telephone": "+52-81-1806-8310",
        "email": "contacto@globalsecuritymx.mx",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Calle Jacarandas #152, Col. Paraje San José",
            "addressLocality": "García",
            "addressRegion": "Nuevo León",
            "postalCode": "66000",
            "addressCountry": "MX"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.8117,
            "longitude": -100.5855
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
        },
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 25.6866,
                "longitude": -100.3161
            },
            "geoRadius": "50000"
        },
        "priceRange": "$$",
        "image": "https://globalsecuritymx.mx/img/header.png",
        "sameAs": []
    }
</script>

<!-- CSS -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Cabin|Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/aos.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="css/skitter.css">
<link rel="stylesheet" href="css/luxbar.css">
<link rel="stylesheet" href="css/main.css" media="all" type="text/css">
