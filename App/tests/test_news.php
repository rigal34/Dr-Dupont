<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\News;

try {
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Instanciation du modèle News
    $newsModel = new News($pdo);

    echo "Test de la classe News : \n\n";

    // Test de la méthode create
    echo "1. Test de création d'une actualité : \n";
    $isCreated = $newsModel->create(
        "Titre de test",
        "Description de test",
        "Source de test",
        "https://example.com",
        "https://example.com/image.jpg",
        date('Y-m-d H:i:s'),
        "Contenu de test"
    );

    if ($isCreated) {
        echo "Nouvelle actualité créée avec succès.\n\n";
    } else {
        echo "Échec de la création de l'actualité.\n\n";
    }

    // Test de la méthode getAll
    echo "2. Test de récupération de toutes les actualités : \n";
    $allNews = $newsModel->getAll();
    if (!empty($allNews)) {
        print_r($allNews);
    } else {
        echo "Aucune actualité trouvée.\n";
    }
    echo "\n";

    // Test de la méthode getById
    echo "3. Test de récupération d'une actualité par ID : \n";
    $lastInsertedId = $allNews[0]['id'] ?? null; // Récupérer le dernier ID inséré
    if ($lastInsertedId) {
        $newsById = $newsModel->getById($lastInsertedId);
        if ($newsById) {
            print_r($newsById);
        } else {
            echo "Échec de la récupération de l'actualité avec ID $lastInsertedId.\n";
        }
    } else {
        echo "Aucun ID d'actualité disponible pour ce test.\n";
    }
    echo "\n";

    // Test de la méthode update
    echo "4. Test de mise à jour de l'actualité : \n";
    if ($lastInsertedId) {
        $isUpdated = $newsModel->update(
            $lastInsertedId,
            "Titre modifié",
            "Description modifiée",
            "Source modifiée",
            "https://modified.com",
            "https://modified.com/image.jpg",
            date('Y-m-d H:i:s')
        );
        if ($isUpdated) {
            echo "Actualité mise à jour avec succès.\n";
            $updatedNews = $newsModel->getById($lastInsertedId);
            print_r($updatedNews);
        } else {
            echo "Échec de la mise à jour de l'actualité.\n";
        }
    }
    echo "\n";

    // Test de la méthode delete
    echo "5. Test de suppression de l'actualité : \n";
    if ($lastInsertedId) {
        $isDeleted = $newsModel->delete($lastInsertedId);
        if ($isDeleted) {
            echo "Actualité supprimée avec succès.\n";
        } else {
            echo "Échec de la suppression de l'actualité.\n";
        }
    }
    echo "\n";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

