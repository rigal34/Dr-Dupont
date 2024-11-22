<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Nouvelle Actualité</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>

<div class="container">
    <h1>Ajouter une Nouvelle Actualité</h1>

    <form action="/news/store" method="post" class="form-container">
        <div class="form-group">
            <label for="source">Source :</label>
            <input type="text" id="source" name="source" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author">Auteur :</label>
            <input type="text" id="author" name="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="url">URL de l'article :</label>
            <input type="url" id="url" name="url" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="urlToImage">URL de l'image :</label>
            <input type="url" id="urlToImage" name="urlToImage" class="form-control">
        </div>

        <div class="form-group">
            <label for="publishedAt">Date de publication :</label>
            <input type="datetime-local" id="publishedAt" name="publishedAt" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea id="content" name="content" class="form-control" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

</body>
</html>
