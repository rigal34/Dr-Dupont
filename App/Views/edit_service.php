<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Service</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>

<div class="container">
    <h1>Modifier le Service</h1>
    <p>Utilisez le formulaire ci-dessous pour modifier les informations de ce service.</p>

    <form method="POST" action="/services/update/<?= htmlspecialchars($service['id'] ?? '') ?>" class="form-container">
        <div class="form-group">
            <label for="nom_service">Nom du Service :</label>
            <input type="text" id="nom_service" name="nom_service"
                   value="<?= htmlspecialchars($service['nom_service'] ?? '') ?>"
                   required class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" required
                      class="form-control"><?= htmlspecialchars($service['description'] ?? '') ?></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            <a href="/services" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>

<style>
    /* Styles pour rendre le formulaire professionnel */
    .container {
        width: 60%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
        font-size: 2em;
        margin-bottom: 10px;
    }
    .form-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .form-group label {
        font-weight: bold;
        color: #555;
        margin-bottom: 5px;
        display: block;
    }
    .form-control {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
        width: 100%;
        box-sizing: border-box;
    }
    textarea.form-control {
        height: 100px;
        resize: vertical;
    }
    .form-actions {
        display: flex;
        justify-content: space-between;
    }
    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>
</body>
</html>
