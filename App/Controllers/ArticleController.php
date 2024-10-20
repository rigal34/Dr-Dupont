<?php

namespace App\Controllers;

class ArticleController {
    public function index() {
        // Charger la vue de la page d'accueil
        require_once __DIR__ . '/../Views/home.php';
    }
}
