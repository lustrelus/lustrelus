<?php 

$request = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/default/path';
$viewDir = '/views/';

switch ($request) {
  case '':
  case '/':
    require __DIR__ . $viewDir . 'home.php';
    break;

  case '/about':
    require __DIR__ . $viewDir . 'about.php';
    break;

  case '/socials':
    require __DIR__ . $viewDir . 'socials.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . $viewDir . '/error/404.php';
}