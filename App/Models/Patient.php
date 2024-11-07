<?php

namespace App\Models;
use PDO;
class Patient
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function create($nom, $prenom, $email, $telephone, $date_naissance, $password)
    {
        $stmt = $this->pdo->prepare('INSERT INTO patients(nom, prenom, email, telephone, date_naissance, password) VALUES (?, ?, ?, ?, ?, ?)');
        return $stmt->execute([$nom, $prenom, $email, $telephone, $date_naissance, $password]);

    }
}