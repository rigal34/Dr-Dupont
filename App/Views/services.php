<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation des services</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        /* Style amélioré pour la page de services */
        h1 {
            text-align: center;
            color: #0056b3;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .service-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .service-section h2 {
            color: #0056b3;
            font-size: 1.8em;
        }
        .service-section p {
            font-size: 1.1em;
            line-height: 1.6em;
        }
        .service-section img {
            max-width: 100px;
            float: left;
            margin-right: 15px;
            border-radius: 8px;
        }
        .service-list {
            list-style-type: none;
            padding: 0;
        }
        .service-list li {
            padding: 10px;
            margin: 10px 0;
            background-color: #e0f7fa;
            border-left: 5px solid #0056b3;
            font-size: 1.2em;
        }
        .back-to-home {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
        }
        .back-to-home:hover {
            background-color: #003d82;
        }
    </style>
    <script>
        function showSection(section) {
            document.getElementById('soins-dentaires').style.display = 'none';
            document.getElementById('orthodontie').style.display = 'none';
            document.getElementById('implantation').style.display = 'none';
            document.getElementById(section).style.display = 'block';
        }
    </script>
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>

<h1>Découvrez Nos Services Dentaires</h1>

<!-- Menu déroulant -->
<label for="service-select">Choisir une catégorie de services :</label>
<select id="service-select" onchange="showSection(this.value)">
    <option value="soins-dentaires">Soins dentaires courants</option>
    <option value="orthodontie">Orthodontie</option>
    <option value="implantation">Implantation</option>
</select>

<!-- Section Soins dentaires courants -->
<div id="soins-dentaires" class="service-section" style="display: block;">
    <h2>Soins Dentaires Courants</h2>
    <p>Le Dr. Dupont propose une gamme complète de soins dentaires pour vous assurer une santé bucco-dentaire optimale. Nos services incluent :</p>
    <ul class="service-list">
        <li>Esthétique : Détartrage et polissage pour des dents propres et brillantes.</li>
        <li>Plombages et réparations des caries.</li>
        <li>Traitement des gencives pour prévenir les infections parodontales.</li>
    </ul>
</div>

<!-- Section Orthodontie -->
<div id="orthodontie" class="service-section" style="display: none;">
    <h2>Orthodontie</h2>
    <p>L'orthodontie est dédiée à la correction des malpositions dentaires. Nous proposons :</p>
    <ul class="service-list">
        <li>Appareils dentaires fixes et amovibles.</li>
        <li>Alignement transparent pour un traitement discret.</li>
        <li>Solutions orthodontiques pour enfants et adultes.</li>
    </ul>
</div>

<!-- Section Implantation -->
<div id="implantation" class="service-section" style="display: none;">
    <h2>Implants Dentaires</h2>
    <p>Remplacez vos dents manquantes grâce à nos solutions d'implantologie. Nos services incluent :</p>
    <ul class="service-list">
        <li>Implants dentaires biocompatibles pour une intégration parfaite.</li>
        <li>Couronnes et bridges sur implants pour un sourire naturel.</li>
        <li>Suivi post-opératoire personnalisé pour un rétablissement rapide.</li>
    </ul>
</div>

<a href="/" class="back-to-home">Retour à l'accueil</a>

</body>
</html>



