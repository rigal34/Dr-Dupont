
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Service</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
body {
    font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
    background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }
        h1 {
    text-align: center;
            color: #0056b3;
            margin-bottom: 20px;
        }
        label {
    display: block;
    font-weight: bold;
            margin: 15px 0 5px;
        }
        input[type="text"], textarea {
    width: 100%;
    padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            resize: vertical;
        }
        button {
    width: 100%;
    padding: 12px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
    background-color: #003d82;
        }
        .back-link {
    display: block;
    text-align: center;
            margin-top: 15px;
            color: #0056b3;
            text-decoration: none;
        }
        .back-link:hover {
    color: #003d82;
}
    </style>
</head>
<body>

<div class="form-container">
    <h1>Ajouter un Nouveau Service</h1>

    <form action="/services/store" method="POST">
        <label for="nom_service">Nom du service</label>
        <input type="text" id="nom_service" name="nom_service" placeholder="Ex. Orthodontie" required>

        <label for="description">Description du service</label>
        <textarea id="description" name="description" rows="4" placeholder="Description détaillée du service" required></textarea>

        <button type="submit">Enregistrer le service</button>
    </form>

    <a href="/services" class="back-link">← Retour à la liste des services</a>
</div>

</body>
</html>
