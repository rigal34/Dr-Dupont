<?php

namespace App\Models;
use PDO;
class RendezVous
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM rendez_vous');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($date_rendez_vous, $heure_rendez_vous, $type_consultation, $statut, $patient_id)
    {
        $stmt = $this->pdo->prepare('INSERT INTO rendez_vous(date_rendez_vous, heure_rendez_vous, type_consultation, statut, patient_id ) VALUES (?, ?, ?, ?, ?)');
        return $stmt->execute([$date_rendez_vous, $heure_rendez_vous, $type_consultation, $statut, $patient_id]);

    }
}