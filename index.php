<?php
// this is my controller

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start a session
session_start();

// require autoload file
require_once('vendor/autoload.php');

// instantiate F3 base class
$f3 = Base::instance();

// define a default route (328/week6)
$f3->route('GET /', function () {

    // instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});




// run Fat Free
$f3->run();
