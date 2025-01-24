<?php

namespace App\Models;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = self::getPDO(); // Charge la connexion PDO
    }
    private static function getPDO(): PDO
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }
    public function getAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM users ORDER BY id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createUser(string $name, string $email, string $passwordHash): bool
    {
        $stmt = $this->pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        return $stmt->execute([$name, $email, $passwordHash]);
    }

    public function emailExists(string $email): bool
    {
        $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetchColumn() > 0;
    }

}
