<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Santé</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #0056b3;
        }
        .news-item {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .news-item h2 {
            color: #0056b3;
            margin-top: 0;
        }
        .news-item p {
            line-height: 1.6;
        }
        .news-item img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }
        .news-item a {
            color: #0056b3;
            text-decoration: none;
        }
        .news-item a:hover {
            text-decoration: underline;
        }
        .source {
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<div class="container">
    <h1>Actualités Santé</h1>

    <div class="news-item">
        <h2>Les avancées de la médecine dentaire en 2024</h2>
        <img src="https://example.com/images/medecine-dentaire.jpg" alt="Avancées de la médecine dentaire">
        <p>Découvrez comment les nouvelles technologies transforment le domaine des soins dentaires. Grâce aux progrès en implantologie, en orthodontie et à la digitalisation des soins, les patients bénéficient d'une meilleure qualité de traitement et de suivis personnalisés.</p>
        <p class="source">Source: Journal de la Santé - Publié le 18 octobre 2024</p>
        <a href="https://example.com/article-medecine-dentaire" target="_blank">Lire l'article complet</a>
    </div>

    <div class="news-item">
        <h2>Prévention des caries chez les enfants : Les dernières recommandations</h2>
        <img src="https://example.com/images/prevention-caries-enfants.jpg" alt="Prévention des caries">
        <p>Les experts en santé dentaire encouragent les parents à adopter des pratiques rigoureuses pour prévenir les caries chez les enfants. Un brossage régulier et une alimentation équilibrée sont les clés pour maintenir une bonne hygiène bucco-dentaire.</p>
        <p class="source">Source: Santé Magazine - Publié le 10 octobre 2024</p>
        <a href="https://example.com/article-prevention-caries" target="_blank">Lire l'article complet</a>
    </div>

    <div class="news-item">
        <h2>Le blanchiment des dents : Les risques et les avantages</h2>
        <img src="https://example.com/images/blanchiment-dents.jpg" alt="Blanchiment des dents">
        <p>Le blanchiment des dents est devenu une pratique courante. Cependant, il est important de bien comprendre les risques et les avantages avant de se lancer. Les dentistes rappellent que certaines techniques peuvent endommager l'émail si elles ne sont pas effectuées correctement.</p>
        <p class="source">Source: Le Monde Dentaire - Publié le 5 octobre 2024</p>
        <a href="https://example.com/article-blanchiment-dents" target="_blank">Lire l'article complet</a>
    </div>

</div>

</body>
</html>

