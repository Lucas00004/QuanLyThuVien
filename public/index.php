<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\controller\staff_controller;

$action = $_GET['action'] ?? 'index';

$controller = new staff_controller();

switch ($action) {
    case 'add':
        $controller->add();
        break;
    default:
        $controller->index();
        break;
}