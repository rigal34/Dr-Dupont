<?php

namespace App\Controllers;

use App\Models\Service;
use PDO;

class AdminServiceController
{
    private Service $serviceModel;

    public function __construct()
    {
        // Connexion à la base de données
        $pdo = new \PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        // Instanciation du modèle Service
        $this->serviceModel = new Service($pdo);
    }

    // Afficher la liste des services
    public function index(): void
    {


        $services = $this->serviceModel->getAll();
//        var_dump($services);
//       die();

        require_once 'C:/xampp/htdocs/Dr-Dupont/App/Views/admin/articles/list.php';


    }









    // Afficher le formulaire de création de service
    public function create(): void
    {
        require_once __DIR__ . '/../Views/create_service.php';
    }

    // Enregistrer un nouveau service
    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_service = htmlspecialchars($_POST['nom_service'] ?? '');
            $description = htmlspecialchars($_POST['description'] ?? '');

            if ($this->serviceModel->create($nom_service, $description)) {
                $this->redirectToServiceList();
            } else {
                echo "Erreur lors de l'ajout du service.";
            }
        }
    }

    // Modifier un service existant
    public function edit(int $id): void
    {
        $service = $this->serviceModel->getById($id);

        if (!$service) {
            $this->showErrorAndExit("Service introuvable.");
        }
        $path = __DIR__ . '/../Views/edit_service.php';




        if (file_exists($path)) {
            require_once $path;
        } else {
            die("Erreur : le fichier edit_service.php est introuvable à l'emplacement : $path");
        }
    }

    // Mettre à jour un service existant
    public function update(int $id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_service = htmlspecialchars($_POST['nom_service'] ?? '');
            $description = htmlspecialchars($_POST['description'] ?? '');

            if ($this->serviceModel->update($id, $nom_service, $description)) {
                $this->redirectToServiceList();
            } else {
                echo "Erreur lors de la mise à jour du service.";
            }
        }
    }

    // Supprimer un service
    public function delete(int $id): void
    {
        if ($this->serviceModel->delete($id)) {
            $this->redirectToServiceList();
        } else {
            echo "Erreur lors de la suppression du service.";
        }
    }

    // Redirection vers la liste des services
    private function redirectToServiceList(): void
    {
        header('Location: /administrator/services');
        exit();
    }

    // Afficher un message d'erreur et arrêter l'exécution
    private function showErrorAndExit(string $message): void
    {
        echo $message;
        exit();
    }
}
