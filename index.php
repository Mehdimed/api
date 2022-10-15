<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
 
if ((isset($uri[1]) && $uri[1] != 'users')) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
 
require __DIR__ . "/Controller/Api/UserController.php";
 
$objFeedController = new UserController();
$strMethodName = $uri[2] . 'Action';
$objFeedController->{$strMethodName}();
?>