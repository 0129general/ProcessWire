<?php

require_once $config->paths->site . 'controllers/ContactController.php';

$controller = new ContactController();
$data = $controller->index($page);

extract($data);
include($config->paths->site . 'views/contact.view.php');
