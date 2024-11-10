<?php

require_once __DIR__ . '/../../vendor/autoload.php';


use App\Models\News;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $newsModel = new News($pdo);

    echo "Test de la classe News : \n";

    // Test de la méthode create
    echo "Test de création d'une actualité : \n";
    $newArticleId = $newsModel->create("Titre de test", "Description de test", "Source de test", "https://exemple.com", "https://exemple.com/image.jpg", date('Y-m-d H:i:s'));
    echo "Nouvelle actualité créée avec ID : $newArticleId\n\n";

    // Test de la méthode getAll
    echo "Test de récupération de toutes les actualités : \n";
    $allNews = $newsModel->getAll();
    print_r($allNews);
    echo "\n\n";

    // Test de la méthode getById
    echo "Test de récupération d'une actualité par ID : \n";
    $newsById = $newsModel->getById($newArticleId);
    print_r($newsById);
    echo "\n\n";

    // Test de la méthode update
    echo "Test de mise à jour de l'actualité : \n";
    $newsModel->update($newArticleId, "Titre modifié", "Description modifiée", "Source modifiée", "https://modifie.com", "https://modifie.com/image.jpg", date('Y-m-d H:i:s'));
    $updatedNews = $newsModel->getById($newArticleId);
    print_r($updatedNews);
    echo "\n\n";

    // Test de la méthode delete
    echo "Test de suppression de l'actualité : \n";
    $newsModel->delete($newArticleId);
    $deletedNews = $newsModel->getById($newArticleId);
    if ($deletedNews === null) {
        echo "Actualité supprimée avec succès.\n";
    } else {
        echo "Échec de la suppression de l'actualité.\n";
    }

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

