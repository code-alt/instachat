<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

#$dotenv = Dotenv\Dotenv::createImmutable("/app/");
#$dotenv->load();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'insta';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$router->get('/', function() {
    require "views/login.php";
});

$router->get('/explore', function($post) {
  require "views/explore.php";
});

$router->get('/post', function($post) {
  require "views/newpost.php";
});

$router->post('/post', function($post) {
  require "views/post-backend.php";
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
  require "404.php";
});

$router->run(); 
// hmm? 
// hold up - let me check something quickly - and also when in doubt just use __DIR__