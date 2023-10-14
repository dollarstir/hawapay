<?php

require 'loader/autoloader.php';


$router = new Router([


    // SIDE BAR ROUTTES ******************************************************
  
    new Route(
        '/',
        function ($context) {
           
            return Viewer::view('app/view/index.php', $context);
        }
    ),


    new Route(
        '/dashboard',
        function ($context) {
           
            return Viewer::view('app/view/index.php', $context);
        }
    ),

    new Route(
        '/buy-sell',
        function ($context) {
           
            return Viewer::view('app/view/buy_sell.php', $context);
        }
    ),

    new Route(
        '/my-orders',
        function ($context) {
           
            return Viewer::view('app/view/my_orders.php', $context);
        }

    ),

    new Route(
        '/wallet',
        function ($context) {
           
            return Viewer::view('app/view/wallet.php', $context);
        }
    ),  


    new Route(
        '/settings',
        function ($context) {
           
            return Viewer::view('app/view/settings.php', $context);
        }
    ),


     // SIDE BAR ROUTTES ******************************************************


    //  authorization routes *************************************************

    new Route(
        '/login',
        function ($context) {
           
            return Viewer::view('app/view/loginauthenticate.php', $context);
        }
    ),

    new Route(
        '/register',
        function ($context) {
           
            return Viewer::view('app/view/registerauth.php', $context);
        }
    ),

    new Route(
        '/verify-email',
        function ($context) {
           
            return Viewer::view('app/view/verify_email.php', $context);
        }
    ),


    new Route(
        '/verify-phone',
        function ($context) {
           
            return Viewer::view('app/view/verify_phone.php', $context);
        }
    ),

    new Route(
        '/otp',
        function ($context) {
           
            return Viewer::view('app/view/enterotp.php', $context);
        }
    ),

    new Route(
        '/email-verified',
        function ($context) {
           
            return Viewer::view('app/view/email_verified.php', $context);
        }
    ),


    new Route(
        '/worker',
        function ($context) {
           
            return Viewer::view('app/view/processor.php', $context);
        }
    ),




]);

$router->launch();
