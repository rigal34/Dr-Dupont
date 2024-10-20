<?php
namespace App\Controllers;

use App\Models\RendezVous;
use PDO;

class RendezVousController
{
    private  $rendezVous;

    public function __construct()
    {
        global $pdo;
        $this->rendezVous = new RendezVous($pdo);
    }

    public function show(): void
    {
        // Récupérer les rendez-vous depuis la base de données
        $stmt = $this->db->query("SELECT * FROM rendez_vous");
        $rendezVousList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Charger la vue agenda.php avec les données des rendez-vous
        require_once __DIR__ . '/../Views/agenda.php';
    }


    public function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date_rendez_vous = $_POST['date_rendez_vous'];
            $heure_rendez_vous = $_POST['heure_rendez_vous'];
            $type_consultation = $_POST['type_consultation'];
            $statut = $_POST['statut'];
            $patient_id = $_POST['patient_id'];
            $this->rendezVous->create($date_rendez_vous, $heure_rendez_vous, $type_consultation, $statut, $patient_id);
            header('Location: /rendezvous');

        } else {
            $rendezVous= $this->rendezVous->getAll();
            if (empty($rendezVous)) {
                echo "Debug : Aucun rendez-vous trouvé dans la base de données.";
            } else {
                echo "Debug : Rendez-vous récupérés avec succès.";
            }
            require_once __DIR__ . '/../Views/agenda.php';
        }
    }
}

