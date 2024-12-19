<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Nouvelle Actualité</title>
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Ajouter une Nouvelle Actualité</h1>

    <form action="/administrator/articles/create" method="POST" class="card shadow p-4">
        <div class="form-group">
            <label for="title">Titre de l'actualité :</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre" required>
        </div>

        <div class="form-group">
            <label for="source">Source :</label>
            <input type="text" class="form-control" id="source" name="source" placeholder="Entrez la source" required>
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Entrez une description" required></textarea>
        </div>

        <div class="form-group">
            <label for="url">Lien de l'article :</label>
            <input type="url" class="form-control" id="url" name="url" placeholder="Entrez l'URL de l'article" required>
        </div>

        <div class="form-group">
            <label for="urlToImage">Lien de l'image :</label>
            <input type="url" class="form-control" id="urlToImage" name="urlToImage" placeholder="Entrez l'URL de l'image">
        </div>

        <div class="form-group">
            <label for="publishedAt">Date de publication :</label>
            <input type="datetime-local" class="form-control" id="publishedAt" name="publishedAt" required>
        </div>

        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Entrez le contenu de l'article"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Créer l'actualité</button>
    </form>
</div>

<script src="/admin/vendor/jquery/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/admin/js/sb-admin-2.min.js"></script>
</body>
</html>
