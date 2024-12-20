<?php

namespace App\Controllers;

use App\Models\News;
use PDO;

class NewsController
{
    private News $newsModel;

    public function __construct()
    {
        // Initialise une connexion PDO et configure les paramètres
        $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->newsModel = new News($pdo);
    }

    // Méthode principale pour afficher toutes les actualités
    public function index(): void
    {
        // Récupération des articles via le modèle
        $articles = $this->newsModel->getAll();

        // Passe les articles à la vue
        require_once __DIR__ . '/../Views/news.php';
    }



    // Affiche le formulaire de création d'une nouvelle actualité
    public function create(): void
    {
        require_once __DIR__ . '/../Views/news_create.php';
    }

    // Enregistre une nouvelle actualité après soumission du formulaire
    public function store(): void
    {
        if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['source']) && !empty($_POST['url']) && !empty($_POST['publishedAt'])) {
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $source = htmlspecialchars($_POST['source']);
            $url = htmlspecialchars($_POST['url']);
            $urlToImage = $_POST['urlToImage'] ?? null;
            $publishedAt = $_POST['publishedAt'];
            $content = $_POST['content'] ?? null;

            $this->newsModel->create($title, $description, $source, $url, $urlToImage, $publishedAt, $content);
        }
        header('Location: /news');
        exit;
    }

    // Affiche le formulaire d'édition d'une actualité existante
    public function edit($id): void
    {
        $actualite = $this->newsModel->getById($id);
        if (!$actualite) {
            echo "Actualité non trouvée.";
            return;
        }
        require_once __DIR__ . '/../Views/news_edit.php';
    }

    // Met à jour une actualité spécifique après modification
    public function update($id): void
    {
        header('Location: /news');
        exit;
    }

    // Affiche une page de confirmation avant suppression
    public function confirmDelete($id): void
    {
        $actualite = $this->newsModel->getById($id);
        if (!$actualite) {
            echo "Actualité non trouvée.";
            return;
        }
        require_once __DIR__ . '/../Views/news/confirm_delete.php';
    }

    // Supprime une actualité spécifique
    public function delete($id): void
    {
        $this->newsModel->delete($id);
        header('Location: /news');
        exit;
    }
}




