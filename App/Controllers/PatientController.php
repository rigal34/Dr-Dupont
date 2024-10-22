<?php

namespace App\Controllers;

use PDO;

class PatientController {
    private $db;

    public function __construct() {
        // Inclure la connexion à la base de données
        $this->db = require_once __DIR__ . '/../Config/config.php';

        // Vérifier si la connexion est bien établie
        if (!$this->db instanceof PDO) {
            die('Erreur de connexion à la base de données.');
        }
    }

    public function create() {
        // Affiche le formulaire pour créer un patient
        require_once __DIR__ . '/../Views/patient_form.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $date_naissance = $_POST['date_naissance'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hachage du mot de passe

            // Insertion dans la base de données
            $stmt = $this->db->prepare("INSERT INTO patients (nom, prenom, email, telephone, date_naissance, password) 
                                    VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :password)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Redirection vers l'agenda après l'ajout du patient
            header('Location: /rendezvous/show');
            exit();
        }
    }

}
