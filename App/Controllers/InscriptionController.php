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
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Récupère les informations du patient en fonction de l'email
            $query = $this->pdo->prepare('SELECT * FROM patients WHERE email = :email');
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Vérifie si le mot de passe correspond
                if (password_verify($password, $user['password'])) {
                    // Authentification réussie, on peut créer une session utilisateur
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['prenom'];

                    // Redirige vers la page des rendez-vous
                    header('Location: /administrator');
                    exit();
                } else {
                    echo "Mot de passe incorrect.";
                }
            } else {
                echo "Adresse e-mail non trouvée.";
            }
        } else {
            // Affiche le formulaire de connexion si la requête n'est pas en POST
            require_once __DIR__ . '/../Views/login.php';
        }
    }

}
require_once __DIR__ . '/../Config/config.php';