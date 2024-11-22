<?php

namespace App\Models;

use PDO;

class News
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Récupère toutes les actualités
     *
     * @return array
     */
    public function getAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM news ORDER BY publishedAt DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère une actualité spécifique par ID
     *
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM news WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Ajoute une nouvelle actualité
     *
     * @param string $title
     * @param string $description
     * @param string $source
     * @param string $url
     * @param string $urlToImage
     * @param string $publishedAt
     * @return bool
     */
    public function create(string $title, string $description, string $source, string $url, ?string $urlToImage, string $publishedAt, ?string $content): bool
    {
        $stmt = $this->pdo->prepare('INSERT INTO news (title, description, source, url, urlToImage, publishedAt, content) VALUES (:title, :description, :source, :url, :urlToImage, :publishedAt, :content)');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':source', $source);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':urlToImage', $urlToImage);
        $stmt->bindParam(':publishedAt', $publishedAt);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }


    /**
     * Met à jour une actualité existante
     *
     * @param int $id
     * @param string $title
     * @param string $description
     * @param string $source
     * @param string $url
     * @param string $urlToImage
     * @param string $publishedAt
     * @return bool
     */
    public function update(int $id, string $title, string $description, string $source, string $url, string $urlToImage, string $publishedAt): bool
    {
        $stmt = $this->pdo->prepare('UPDATE news SET title = :title, description = :description, source = :source, url = :url, urlToImage = :urlToImage, publishedAt = :publishedAt WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':source', $source);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':urlToImage', $urlToImage);
        $stmt->bindParam(':publishedAt', $publishedAt);
        return $stmt->execute();
    }

    /**
     * Supprime une actualité par ID
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare('DELETE FROM news WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
