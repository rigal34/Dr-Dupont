<?php

namespace App\Controllers;

use PDO;
use PDOException;
use App\Models\Patient;

class InscriptionController {
    private PDO $pdo;
    private $patient;

    public function __construct()
    {
        global $pdo;
        $this->patient = new Patient($pdo);

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }


    public function index(): void {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $date_naissance = $_POST['date_naissance'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hachage du mot de passe
            $this->patient->create($nom, $prenom, $email, $telephone, $date_naissance, $password);
            header('Location: /rendezvous');
            exit();
        }else{
            require_once __DIR__ . '/../Views/inscription.php';
        }
    }
}
require_once __DIR__ . '/../Config/config.php';