<?php

namespace App\Models;

use PDO;

class Service
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Récupère tous les services.
     *
     * @return array
     */
    public function getAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM services');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère un service spécifique par ID.
     *
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM services WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Ajoute un nouveau service.
     *
     * @param string $nom_service
     * @param string $description
     * @return bool
     */
    public function create(string $nom_service, string $description): bool
    {
        $stmt = $this->pdo->prepare('INSERT INTO services (nom_service, description) VALUES (:nom_service, :description)');
        $stmt->bindParam(':nom_service', $nom_service);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    /**
     * Met à jour un service existant.
     *
     * @param int $id
     * @param string $nom_service
     * @param string $description
     * @return bool
     */
    public function update(int $id, string $nom_service, string $description): bool
    {
        $stmt = $this->pdo->prepare('UPDATE services SET nom_service = :nom_service, description = :description WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom_service', $nom_service);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    /**
     * Supprime un service.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare('DELETE FROM services WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

