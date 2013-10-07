<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHPMVC @ BTH av: Trekka 12 - <?php echo $pageTitle; ?></title> <!-- //Lägg till unik del av titeln baserad på respektive undersidor -->
        <meta name="description" content="<?php echo $page_Meta_Desc; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="robots" content="noindex, nofollow"> <!-- Page is not to be indexed by search engines -->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/main.css">
        -->
        <link rel="stylesheet" href="theme/theme_styles.css">
        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="mainWrapper">
            <header id="top">
                <h1 id="logo">PHPMVC @ BTH <span class="detail creator">av: Trekka12 [Trekka12@cyberfox.se]</span></h1>

                <?php generateMenu($pageID); ?>

            </header>

            <section id="content">
                <?php echo $pageContent; ?>
            </section>

            <footer id="bottom">
                <p>
                    &copy; Copyright <?php echo date('Y', time()); ?> Trekka12 @ BTH. Alla rättigheter reserverade.<br>
                    <span class="detail">Validerad:</span> <a href="http://validator.w3.org/check/referer">HTML 5</a>, <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS 3.0</a>.
                </p>

                <nav id="kmomSubNav">
                    <p><span class="detail">PHPMVC</span> kmom01</p>
                </nav>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


        <!-- No need for Google Analytics on this site - Disable script by comment it away -->
        
        <!-- // Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        -->
    </body>
</html>