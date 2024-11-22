<?php
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

    <!-- Bouton pour ajouter une nouvelle actualité -->
    <div class="btn-container" style="text-align: right; margin-bottom: 20px;">
        <a href="/news/create" class="btn btn-primary">Ajouter une actualité</a>
    </div>

    <!-- Actualités statiques -->
    <div class="news-item">
        <h2>Les avancées de la médecine dentaire en 2024</h2>
        <img src="https://example.com/images/medecine-dentaire.jpg" alt="Avancées de la médecine dentaire">
        <p>Découvrez comment les nouvelles technologies transforment le domaine des soins dentaires...</p>
        <p class="source">Source: Journal de la Santé - Publié le 18 octobre 2024</p>
        <a href="https://example.com/article-medecine-dentaire" target="_blank">Lire l'article complet</a>

        <!-- Boutons Modifier et Supprimer -->
        <div class="action-buttons">
            <button type="button" class="btn btn-secondary">Modifier</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
        </div>
    </div>

    <div class="news-item">
        <h2>Prévention des caries chez les enfants : Les dernières recommandations</h2>
        <img src="https://example.com/images/prevention-caries-enfants.jpg" alt="Prévention des caries">
        <p>Les experts en santé dentaire encouragent les parents à adopter des pratiques rigoureuses...</p>
        <p class="source">Source: Santé Magazine - Publié le 10 octobre 2024</p>
        <a href="https://example.com/article-prevention-caries" target="_blank">Lire l'article complet</a>

        <!-- Boutons Modifier et Supprimer -->
        <div class="action-buttons">
            <button type="button" class="btn btn-secondary">Modifier</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
        </div>
    </div>

    <div class="news-item">
        <h2>Le blanchiment des dents : Les risques et les avantages</h2>
        <img src="https://example.com/images/blanchiment-dents.jpg" alt="Blanchiment des dents">
        <p>Le blanchiment des dents est devenu une pratique courante...</p>
        <p class="source">Source: Le Monde Dentaire - Publié le 5 octobre 2024</p>
        <a href="https://example.com/article-blanchiment-dents" target="_blank">Lire l'article complet</a>

        <!-- Boutons Modifier et Supprimer -->
        <div class="action-buttons">
            <button type="button" class="btn btn-secondary">Modifier</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
        </div>
    </div>

    <!-- Actualités dynamiques -->
    <?php if (!empty($actualites)): ?>
        <?php foreach ($actualites as $actualite): ?>
            <div class="news-item">
                <h2><?= htmlspecialchars($actualite['title']) ?></h2>
                <img src="<?= htmlspecialchars($actualite['urlToImage']) ?>" alt="<?= htmlspecialchars($actualite['title']) ?>">
                <p><?= htmlspecialchars($actualite['description']) ?></p>
                <p class="source">Source: <?= htmlspecialchars($actualite['source']) ?> - Publié le <?= htmlspecialchars($actualite['publishedAt']) ?></p>
                <a href="<?= htmlspecialchars($actualite['url']) ?>" target="_blank">Lire l'article complet</a>

                <!-- Boutons Modifier et Supprimer pour les actualités dynamiques -->
                <div class="action-buttons">
                    <a href="/news/edit/<?= $actualite['id'] ?>" class="btn btn-secondary">Modifier</a>
                    <a href="/news/delete/<?= $actualite['id'] ?>" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')">Supprimer</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</body>
</html>


