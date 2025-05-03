<?php

require_once $config->paths->site . 'controllers/HomeController.php';

$controller = new HomeController();
$data = $controller->index($page);

extract($data);
include($config->paths->site . 'views/home.view.php');
