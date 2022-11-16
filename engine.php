<?php

require_once 'loader/autoloader.php';
$router = new Router([
    /* Welcome to Yolk RouteEngine
     ***************************************************************
     * the ('/migration') route should be commented out  in production mode.
     * To avoid destruction of database
     *
     * use it in Development mode to build your database tables
     *************************************************************
     * NB :  ('/') - indicate the default page that loads
     * changet he this rounte destination to your default website homepage file after installation successful
     * eg : new Route(
        '/',
        function ($context) {
            return Viewer::view('mainfiles/index.php', $context);
        }
    ),
    ************************************************************************************
     */

    new Route(
        '/migration',
        function ($context) {
            return Viewer::view('storage/database.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('template/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('template/main.php', $context);
        }
    ),

    new Route(
        '/login',
        function ($context) {
            return Viewer::view('template/auth.php', $context);
        }
    ),

    new Route(
        '/register',
        function ($context) {
            return Viewer::view('template/regis.php', $context);
        }
    ),

    new Route(
        '/payment',
        function ($context) {
            return Viewer::view('template/pay1.php', $context);
        }
    ),

    new Route(
        '/cart',
        function ($context) {
            return Viewer::view('template/mycart.php', $context);
        }
    ),

    new Route(
        '/password-reset',
        function ($context) {
            return Viewer::view('template/forget-password.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('template/mycontact.php', $context);
        }
    ),

    new Route(
        '/faq',
        function ($context) {
            return Viewer::view('template/faq.php', $context);
        }
    ),

    new Route(
        '/checkout',
        function ($context) {
            return Viewer::view('template/mycheckout.php', $context);
        }
    ),

    new Route(
        '/product',
        function ($context) {
            return Viewer::view('template/myprod.php', $context);
        }
    ),

    new Route(
        '/account',
        function ($context) {
            return Viewer::view('template/myaccount.php', $context);
        }
    ),
]);
$router->launch();
