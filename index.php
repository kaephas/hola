<?php
/**
 * Created by PhpStorm.
 * User: kaephas
 * Date: 2019-04-10
 * Time: 13:04
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// turn on fat-free errors
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Hola el Mundo</h1>';
});

// run fat-free
$f3->run();