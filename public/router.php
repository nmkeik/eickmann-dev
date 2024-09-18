<?php

$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path']; 

checkfernwartung();
routeToView($path);

function abort($code = 404) {
    http_response_code($code);

    header("Location: /$code/");

    die();
}

function routeToView($path) {
    if($path === '/') {
        header('Location: /home/');
        die();
    }
    if(!file_exists('../' . $path . 'view.php')) abort();
    if($path === '/phpinfo/') require 'view.php';
    require '../_components/head.php';
    require '../_components/header.php';
    require 'view.php';
    require '../_components/footer.php';
    require '../_components/foot.php';
}