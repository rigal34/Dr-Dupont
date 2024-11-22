<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Actualité</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<div class="container">
    <h1>Modifier l'Actualité</h1>

    <?php if (isset($actualite)): ?>
        <form action="/news/update/<?= htmlspecialchars($actualite['id']) ?>" method="post">
            <div class="form-group">
                <label for="source">Source :</label>
                <input type="text" id="source" name="source" value="<?= htmlspecialchars($actualite['source']) ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Auteur :</label>
                <input type="text" id="author" name="author" value="<?= htmlspecialchars($actualite['author']) ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars($actualite['title']) ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" class="form-control" required><?= htmlspecialchars($actualite['description']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="url">URL de l'article :</label>
                <input type="url" id="url" name="url" value="<?= htmlspecialchars($actualite['url']) ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="urlToImage">URL de l'image :</label>
                <input type="url" id="urlToImage" name="urlToImage" value="<?= htmlspecialchars($actualite['urlToImage']) ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="publishedAt">Date de publication :</label>
                <input type="datetime-local" id="publishedAt" name="publishedAt" value="<?= htmlspecialchars($actualite['publishedAt']) ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Contenu :</label>
                <textarea id="content" name="content" class="form-control"><?= htmlspecialchars($actualite['content']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    <?php else: ?>
        <p>Actualité non trouvée.</p>
    <?php endif; ?>
</div>
</body>
</html>

