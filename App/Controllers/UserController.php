<?php

namespace App\Controllers;

use App\Models\User;
use PDO;

class UserController
{
    private User $userModel;

    public function __construct()
    {

        global $pdo;
        $this->userModel = new User($pdo);
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
    public function store()
    {
        echo "Enregistrement d'un nouvel utilisateur";
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
