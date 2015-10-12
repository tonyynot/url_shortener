<?php

use Slim\Slim;

ini_set('display_errors', 'On');

require '../vendor/autoload.php';

$app = new Slim();

$app->config([
  'baseUrl' => 'http://localhost:8080'
  ]);

require 'database.php';
require 'routes.php';
