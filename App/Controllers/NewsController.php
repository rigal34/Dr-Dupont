<?php

namespace App\Controllers;

class NewsController
{
    public function index(): void
    {
        require_once __DIR__ . '/../Views/news.php';
    }

    public function create(): void
    {
        require_once __DIR__ . '/../Views/news_create.php';
    }

    public function store(): void
    {
        header('Location: /news');
        exit;
    }

    public function edit($id): void
    {
        require_once __DIR__ . '/../Views/news_edit.php';
    }

    public function update($id): void
    {
        header('Location: /news');
        exit;
    }

    public function delete($id): void
    {
        header('Location: /news');
        exit;
    }
}
require_once __DIR__. '/../Views/news.php';

