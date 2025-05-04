<?php

require_once $config->paths->site . 'controllers/ProjectsController.php';

$controller = new ProjectsController();
$data = $controller->index($page);

extract($data);
include($config->paths->site . 'views/current-project.view.php');
