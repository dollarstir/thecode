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
        '/success',
        function ($context) {
            return Viewer::view('template/pay2.php', $context);
        }
    ),

    new Route(
        '/cart',
        function ($context) {
            return Viewer::view('template/mycart.php', $context);
        }
    ),

    new Route(
        '/view-order',
        function ($context) {
            return Viewer::view('template/orderdetail.php', $context);
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

    new Route(
        '/logout',
        function ($context) {
            return Viewer::view('template/out.php', $context);
        }
    ),

    // admin route

    new Route(
        '/streetadmin',
        function ($context) {
            return Viewer::view('vadmin/index.php', $context);
        }
    ),

    new Route(
        '/adminorders',
        function ($context) {
            return Viewer::view('vadmin/admin_orders.php', $context);
        }
    ),

    new Route(
        '/neworders',
        function ($context) {
            return Viewer::view('vadmin/new_orders.php', $context);
        }
    ),

    new Route(
        '/processingorders',
        function ($context) {
            return Viewer::view('vadmin/p_orders.php', $context);
        }
    ),

    new Route(
        '/completedorders',
        function ($context) {
            return Viewer::view('vadmin/completed_orders.php', $context);
        }
    ),

    new Route(
        '/cancelledorders',
        function ($context) {
            return Viewer::view('vadmin/cancelled_orders.php', $context);
        }
    ),

    new Route(
        '/adminproducts',
        function ($context) {
            return Viewer::view('vadmin/admin_products.php', $context);
        }
    ),

    new Route(
        '/category',
        function ($context) {
            return Viewer::view('vadmin/cate.php', $context);
        }
    ),

    new Route(
        '/customstates',
        function ($context) {
            return Viewer::view('vadmin/custom_states.php', $context);
        }
    ),

    new Route(
        '/addproduct',
        function ($context) {
            return Viewer::view('vadmin/new_prod.php', $context);
        }
    ),

    new Route(
        '/users',
        function ($context) {
            return Viewer::view('vadmin/adminusers.php', $context);
        }
    ),
    new Route(
        '/app',
        function ($context) {
            return Viewer::view('vadmin/app_settings.php', $context);
        }
    ),

    new Route(
        '/addcustom',
        function ($context) {
            return Viewer::view('vadmin/add_custom.php', $context);
        }
    ),

    new Route(
        '/addcategory',
        function ($context) {
            return Viewer::view('vadmin/add_category.php', $context);
        }
    ),

    new Route(
        '/authentication',
        function ($context) {
            return Viewer::view('vadmin/auth.php', $context);
        }
    ),

    new Route(
        '/editproduct',
        function ($context) {
            return Viewer::view('vadmin/edit_prod.php', $context);
        }
    ),

    new Route(
        '/editcategory',
        function ($context) {
            return Viewer::view('vadmin/edit_cat.php', $context);
        }
    ),

    new Route(
        '/newsletter',
        function ($context) {
            return Viewer::view('vadmin/newsletter.php', $context);
        }
    ),

    new Route(
        '/adddetails',
        function ($context) {
            return Viewer::view('vadmin/add_detail.php', $context);
        }
    ),


    new Route(
        '/viewdetials',
        function ($context) {
            return Viewer::view('vadmin/detials.php', $context);
        }
    ),
]);
$router->launch();
