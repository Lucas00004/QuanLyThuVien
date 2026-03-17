<?php
namespace App\model;

use App\Database;
use PDO;

class staff_model {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAllStaff() {
        $stmt = $this->conn->prepare("SELECT * FROM staff ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addStaff($name, $email, $phone) {
        $stmt = $this->conn->prepare(
            "INSERT INTO staff (name, email, phone) VALUES (:name, :email, :phone)"
        );

        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $phone = htmlspecialchars(strip_tags($phone));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);

        return $stmt->execute();
    }
}