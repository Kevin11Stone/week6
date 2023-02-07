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
$f3->route('GET /', function ($f3) {

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'my title');

    // add your fav food and color
    $f3->set('food', 'oysters');
    $f3->set('color', 'black');

    $f3->set('radius', 10);

    // instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});




// run Fat Free
$f3->run();

