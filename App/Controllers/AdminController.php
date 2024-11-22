<?php

namespace App\Controllers;

class AdminController
{
    public function index()
    {
        // Charger la vue de la page d'accueil
        require_once __DIR__ . '/../Views/admin/index.php';
    }

    public function articles(){
        require_once __DIR__ . '/../Views/admin/articles/list.php';
    }

    public function createArticle()
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
            header('Location: /news');
        }else{
            require_once __DIR__ . '/../Views/admin/articles/create.php';
        }

    }

    public function deleteArticle($id)
    {

    }

    public function editArticle($id){

    }

}


