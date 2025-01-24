<?php

namespace App\Controllers;

use App\Models\User;
use PDO;

class UserController
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User(); // Supprime la dépendance à $pdo ici
    }


    public function index(): void
    {
        // Utilisation de $this->userModel initialisé dans le constructeur
        $users = $this->userModel->getAll(); // Récupérez les utilisateurs
        require_once __DIR__ . '/../Views/admin/user_list.php'; // Affichez la vue
    }



    // Méthode pour afficher le formulaire de création
    public function create(): void
    {
        require_once __DIR__ . '/../Views/user_form.php'; // Affichez la vue
    }

    // Méthode pour enregistrer un utilisateur
    public function store(): void
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Vérifier si l'e-mail existe déjà
        if ($this->userModel->emailExists($email)) {
            die('Erreur : Cette adresse e-mail est déjà utilisée.');
        }

        // Hacher le mot de passe
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        // Appeler le modèle pour insérer l'utilisateur
        if ($this->userModel->createUser($name, $email, $passwordHash)) {
            // Rediriger vers la liste des utilisateurs
            header('Location: /administrator/users');
            exit();
        } else {
            die('Erreur : Impossible d\'ajouter l\'utilisateur.');
        }
    }


    // Méthode pour afficher le formulaire de modification
    public function edit($id)
    {
        echo "Formulaire pour modifier l'utilisateur avec l'ID : $id";
    }

    // Méthode pour supprimer un utilisateur
    public function delete($id)
    {
        echo "Suppression de l'utilisateur avec l'ID : $id";
    }
}
