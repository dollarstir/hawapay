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


]);

$router->launch();
