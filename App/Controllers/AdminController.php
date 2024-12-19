<?php

namespace App\Controllers;

use App\Models\News;

class AdminController
{
    private News $newsModel;

    public function __construct()
    {
        // Connexion à la base de données avec le bon espace de noms pour PDO
        $pdo = new \PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        // Instanciation du modèle News
        $this->newsModel = new News($pdo);
    }

    public function index()
    {
        // Charger la vue de la page d'accueil
        require_once __DIR__ . '/../Views/admin/index.php';
    }

    public function articles()
    {
        // Récupérer tous les articles via le modèle
        $articles = $this->newsModel->getAll();

        // Charger la vue avec les articles
        require_once __DIR__ . '/../Views/admin/articles/list.php';
    }

    public function createArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['source']) && !empty($_POST['url']) && !empty($_POST['publishedAt'])) {
                $title = htmlspecialchars($_POST['title']);
                $description = htmlspecialchars($_POST['description']);
                $source = htmlspecialchars($_POST['source']);
                $url = htmlspecialchars($_POST['url']);
                $urlToImage = $_POST['urlToImage'] ?? null;
                $publishedAt = $_POST['publishedAt'];
                $content = $_POST['content'] ?? null;

                $this->newsModel->create($title, $description, $source, $url, $urlToImage, $publishedAt, $content);

                // Redirection après création
                header('Location: /administrator/articles');
                exit();
            } else {
                echo "Veuillez remplir tous les champs requis.";
            }
        }

        // Charger la vue du formulaire de création
        require_once __DIR__ . '/../Views/admin/articles/create.php';
    }

    public function deleteArticle($id)
    {
        if ($this->newsModel->delete($id)) {
            header('Location: /administrator/articles');
            exit();
        } else {
            echo "Erreur lors de la suppression de l'article.";
        }
    }

    public function editArticle($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $source = htmlspecialchars($_POST['source']);
            $url = htmlspecialchars($_POST['url']);
            $urlToImage = $_POST['urlToImage'] ?? null;
            $publishedAt = $_POST['publishedAt'];
            $content = $_POST['content'] ?? null;

            if ($this->newsModel->update($id, $title, $description, $source, $url, $urlToImage, $publishedAt, $content)) {
                header('Location: /administrator/articles');
                exit();
            } else {
                echo "Erreur lors de la mise à jour de l'article.";
            }
        }

        // Récupérer l'article à éditer
        $article = $this->newsModel->getById($id);

        // Charger la vue d'édition avec les données de l'article
        require_once __DIR__ . '/../Views/admin/articles/edit.php';
    }
}


