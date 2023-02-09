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

    $fruits = array("apple", "banana", "orange");
    $f3->set('fruits', $fruits);


    $colors = array("red", "blue", "yellow");
    $f3->set('colors', $colors);


    $cupcakes = array("chocolate"=>"Chocolate Ganache",
        "strawberry"=>"Strawberry");
    $f3->set('cupcakes', $cupcakes);

    // add a variable that stores your age
    $f3->set('age', 25);


    // in the view page, if age is over 30, print
    // "You are mature". Otherwise, print "You are a sprint chicken"


    // instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});




// run Fat Free
$f3->run();

