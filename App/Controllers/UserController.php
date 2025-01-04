<?php

namespace App\Controllers;

class UserController
{
    // Méthode pour afficher la liste des utilisateurs
    public function index()
    {
        echo "Affichage de la liste des utilisateurs";
    }

    // Méthode pour afficher le formulaire de création
    public function create()
    {
        echo "Formulaire pour ajouter un utilisateur";
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
