<?php
namespace App\controller;

use App\model\staff_model;

class staff_controller {
    private $model;

    public function __construct() {
        $this->model = new staff_model();
    }

    public function index() {
        $staffs = $this->model->getAllStaff();
        require_once __DIR__ . '/../../view/staff_list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';

            if (!empty($name) && !empty($email) && !empty($phone)) {
                $this->model->addStaff($name, $email, $phone);
            }
        }

        header("Location: index.php");
        exit();
    }
}