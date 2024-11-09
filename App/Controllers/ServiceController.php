<?php

namespace App\Controllers;

use App\Models\Service;
use JetBrains\PhpStorm\NoReturn;
use PDO;

class ServiceController
{
    private Service $serviceModel;

    public function __construct()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->serviceModel = new Service($pdo);
    }

    public function index(): void
    {
        $services = $this->serviceModel->getAll();
        require_once __DIR__ . '/../Views/services.php';
    }

    public function create(): void
    {
        require_once __DIR__ . '/../Views/create_service.php';
    }

    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_service = $_POST['nom_service'] ?? null;
            $description = $_POST['description'] ?? null;

            $this->serviceModel->create($nom_service, $description);
            $this->redirectToServiceList();
        }
    }

    public function edit(int $id = null): void
    {
        $service = $this->serviceModel->getById($id);

        if (!$service) {
            $this->showErrorAndExit("Service introuvable.");
        }

        require_once __DIR__ . '/../Views/edit_service.php';
    }

    public function update(int $id = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_service = $_POST['nom_service'] ?? null;
            $description = $_POST['description'] ?? null;

            $this->serviceModel->update($id, $nom_service, $description);
            $this->redirectToServiceList();
        }
    }

    #[NoReturn]
    public function delete(int $id = null): void
    {
        $this->serviceModel->delete($id);
        header('Location: /services');
        exit; // Terminer le script pour respecter le concept de NoReturn
    }
    #[NoReturn]
    public function redirectToServiceList(): void
    {
        header('Location: /services');
        exit; // Arrête l'exécution du script
    }

    #[NoReturn]
    public function showErrorAndExit(string $message): void
    {
        echo $message;
        exit; // Arrête l'exécution du script en cas d'erreur
    }

}
