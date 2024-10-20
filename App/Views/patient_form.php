<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Patient</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<h1>Formulaire d'inscription d'un patient</h1>

<<form action="/patient/store" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="date_naissance">Date de naissance :</label>
    <input type="date" id="date_naissance" name="date_naissance" required><br><br>

    <button type="submit">Ajouter le patient</button>
</form>

</body>
</html>
