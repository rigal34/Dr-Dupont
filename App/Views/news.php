<?php

// Définit une variable d'URL par défaut
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

// Vérifie si on est dans /administrator/articles
$showAdminButtons = str_contains($requestUri, '/administrator/articles');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Santé</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>

<div class="container">
    <h1>Actualités Santé</h1>

    <!-- MODIFICATION : Bouton Ajouter une actualité (uniquement pour /administrator/articles) -->
    <?php if ($showAdminButtons): ?>
        <div class="btn-container" style="text-align: right; margin-bottom: 20px;">
            <a href="/administrator/articles/create" class="btn btn-primary">Ajouter une actualité</a>
        </div>
    <?php endif; ?>

    <!-- Actualités statiques -->
    <div class="news-item">
        <h2>Les avancées de la médecine dentaire en 2024</h2>
        <img src="https://example.com/images/medecine-dentaire.jpg" alt="Avancées de la médecine dentaire">
        <p>Découvrez comment les nouvelles technologies transforment le domaine des soins dentaires...</p>
        <p class="source">Source: Journal de la Santé - Publié le 18 octobre 2024</p>
        <a href="https://example.com/article-medecine-dentaire" target="_blank">Lire l'article complet</a>
    </div>

    <div class="news-item">
        <h2>Prévention des caries chez les enfants : Les dernières recommandations</h2>
        <img src="https://example.com/images/prevention-caries-enfants.jpg" alt="Prévention des caries">
        <p>Les experts en santé dentaire encouragent les parents à adopter des pratiques rigoureuses...</p>
        <p class="source">Source: Santé Magazine - Publié le 10 octobre 2024</p>
        <a href="https://example.com/article-prevention-caries" target="_blank">Lire l'article complet</a>
    </div>

    <!-- Titre pour les actualités dynamiques -->
    <h2>Plus d'actualités</h2>

    <!-- Actualités dynamiques -->
    <?php if (!empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="news-item">
                <h3><?= htmlspecialchars($article['title']) ?></h3>
                <img src="<?= htmlspecialchars($article['urlToImage']) ?>" alt="<?= htmlspecialchars($article['title']) ?>">
                <p><?= htmlspecialchars($article['description']) ?></p>
                <p class="source">Source: <?= htmlspecialchars($article['source']) ?> - Publié le <?= htmlspecialchars($article['publishedAt']) ?></p>
                <a href="<?= htmlspecialchars($article['url']) ?>" target="_blank">Lire l'article complet</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune actualité disponible pour le moment.</p>
    <?php endif; ?>
</div>

</body>
</html>
