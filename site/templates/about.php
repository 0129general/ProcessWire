<?php

require_once $config->paths->site . 'controllers/AboutController.php';

$controller = new AboutController();
$data = $controller->index($page);

extract($data);
include($config->paths->site . 'views/about.view.php');
