<?php

namespace App\Controllers;

class NewsController
{
    public function index(): void
    {
        // Affiche la vue de la page d'actualités
        require_once __DIR__ . '/../Views/news.php';
    }
}
