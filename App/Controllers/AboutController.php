<?php

namespace App\Controllers;

class AboutController
{
    public function index(): void
    {
        // Charge la vue de la page "À propos"
        require_once __DIR__ . '/../Views/about.php';
    }
}
