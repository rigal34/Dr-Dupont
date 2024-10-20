<?php

namespace App\Controllers;

use PDO;
use PDOException;

class ServiceController
{
    private PDO $pdo;

    public function __construct()
    {
        // Connexion à la base de données
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function index(): void
    {
        // Correction : Utiliser la table 'services' avec un 's'
        $stmt = $this->pdo->query('SELECT * FROM services');
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Charger la vue et passer les services à la vue
        require_once __DIR__ . '/../Views/services.php';
    }
}
