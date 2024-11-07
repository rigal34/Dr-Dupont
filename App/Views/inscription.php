<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<h1>Inscription</h1>

<form method="POST" action="/inscription">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required><br><br>

    <label for="date_naissance">Date de naissance :</label>
    <input type="date" id="date_naissance" name="date_naissance" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">S'inscrire</button>
</form>


</body>
</html>


