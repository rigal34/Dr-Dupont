<?php

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Dr. Dupont</title> <!-- Correction : Supprimer la deuxième balise <title> -->

    <link rel="stylesheet" href="assets/css/style.css"> <!-- Assurez-vous que le chemin du fichier CSS est correct -->
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<h1>Bienvenue sur le site du Dr. Dupont</h1>

<h2>À propos du Dr. Dupont</h2>
<p>
    <img src="assets/images/dr_Dupont.webp" alt="Dr. Dupont" style="max-width: 300px; float: left; margin-right: 20px;">
    Le Dr. Dupont est un professionnel de la santé avec plus de 20 ans d'expérience dans le domaine médical.
    Spécialisé en soins dentaires et orthodontie, il est dédié à fournir des soins de qualité et à offrir un service personnalisé à ses patients.
</p>

<h2>Notre équipe</h2>
<p>
    <img src="assets/images/equipe_dentaire.webp" alt="Équipe" style="max-width: 300px; float: left; margin-right: 20px;">
    Situé au cœur de la ville, notre cabinet est équipé des dernières technologies pour offrir les meilleurs soins dentaires possibles.
    Nous offrons un cadre chaleureux et accueillant afin que nos patients se sentent à l'aise durant leur visite.
</p>

<h2>Nos services</h2>
<ul>
    <li>Soins dentaires courants</li>
    <li>Orthodontie</li>
    <li>Implantologie</li>
    <li>Esthétique dentaire</li>
</ul>

<h2>Horaires d'ouverture</h2>
<p>
    Nous sommes ouverts du lundi au vendredi de 8h00 à 18h00 et le samedi de 9h00 à 13h00.
</p>


<a href="/inscription" class="button">Prendre un rendez-vous</a>



</body>
</html>
