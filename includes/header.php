<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Pajemotech - Web Design & Development</title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Pajemotech - Professional Web Design and Development Services. Creating modern, responsive websites that drive results for businesses in Ghana and worldwide.'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'web design, web development, digital marketing, e-commerce, branding, Ghana web design, Accra web development, responsive websites, SEO'; ?>">
    <meta name="author" content="Pajemotech">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="PTaYs83mlNp/PzTbFR3o/g" async></script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://pajemotech.com' . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://pajemotech.com' . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Pajemotech - Web Design & Development">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional Web Design and Development Services. Creating modern, responsive websites that drive results for businesses in Ghana and worldwide.'; ?>">
    <meta property="og:image" content="https://pajemotech.com/assets/images/og-image.jpg">
    <meta property="og:site_name" content="Pajemotech">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo 'https://pajemotech.com' . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Pajemotech - Web Design & Development">
    <meta property="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional Web Design and Development Services. Creating modern, responsive websites that drive results for businesses in Ghana and worldwide.'; ?>">
    <meta property="twitter:image" content="https://pajemotech.com/assets/images/og-image.jpg">
    
    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#f59e0b">
    <meta name="msapplication-TileColor" content="#f59e0b">
    <meta name="msapplication-config" content="assets/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Pajemotech",
        "url": "https://pajemotech.com",
        "logo": "https://pajemotech.com/assets/images/logo.png",
        "description": "Professional Web Design and Development Services in Ghana. We create modern, responsive websites that drive business results.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "45 Danso St",
            "addressLocality": "Accra",
            "addressCountry": "Ghana"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+233543943204",
            "contactType": "customer service",
            "email": "Info@pajemotech.com"
        },
        "sameAs": [
            "https://facebook.com/pajemotech",
            "https://twitter.com/pajemotech",
            "https://linkedin.com/company/pajemotech",
            "https://instagram.com/pajemotech"
        ]
    }
    </script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Analytics -->
    <!-- Add your Google Analytics tracking code here -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/logo.png" alt="Pajemotech" class="logo-img">
                            
                        </a>
                    </div>
                    
                    <!-- Navigation Menu -->
                    <div class="nav-menu" id="navMenu">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                                    Services <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="services.php#web-design">Web Design</a>
                                    <a href="services.php#web-development">Web Development</a>
                                    <a href="services.php#ecommerce">E-commerce</a>
                                    <a href="services.php#digital-marketing">Digital Marketing</a>
                                    <a href="services.php#branding">Branding</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="portfolio.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'active' : ''; ?>">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                            </li>
                        </ul>
                        
                        <!-- CTA Button -->
                        <div class="nav-cta">
                            <a href="contact.php" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <div class="mobile-menu-toggle" id="mobileMenuToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>