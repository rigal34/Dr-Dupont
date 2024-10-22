<?php

namespace App\Controllers;

class InscriptionController {
    // Méthode pour afficher le formulaire d'inscription
    public function index(): void {
        // On n'a pas besoin de connexion à la base de données ici
        require_once __DIR__ . '/../Views/inscription.php';  // Charge la vue d'inscription
    }

    // Méthode pour traiter la soumission du formulaire et enregistrer le patient
    public function store(): void {
        // Connexion à la base de données uniquement pour l'insertion
        $db = require_once __DIR__ . '/../Config/config.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $date_naissance = $_POST['date_naissance'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hachage du mot de passe

            // Insérer les données dans la base de données
            $stmt = $db->prepare("INSERT INTO patients (nom, prenom, email, telephone, date_naissance, password) 
                                  VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :password)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Redirection vers la page de confirmation ou de prise de rendez-vous
            header('Location: /rendezvous');
            exit();
        }
    }
}
