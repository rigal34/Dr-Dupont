<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation des services</title>
    <link rel="stylesheet" href="/assets/css/style.css">
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
<h1>Présentation des services du Dr. Dupont</h1>

<!-- Menu déroulant -->
<label for="service-select">Choisir une catégorie de services :</label>
<select id="service-select" onchange="showSection(this.value)">
    <option value="soins-dentaires">Soins dentaires courants</option>
    <option value="orthodontie">Orthodontie</option>
    <option value="implantation">Implantation</option>
</select>

<!-- Section Soins dentaires courants -->
<div id="soins-dentaires" style="display: block;">
    <h2>Soins dentaires courants</h2>
    <p>Le Dr. Dupont propose une large gamme de soins dentaires courants pour garantir la santé de vos dents et de vos gencives. Parmi ces soins, nous proposons :</p>
    <?php if (!empty($services)): ?>
        <?php foreach ($services as $service): ?>
            <?php if ($service['nom_service'] === 'esthetique'): ?>
                <p><strong><?= htmlspecialchars($service['nom_service']) ?> :</strong> <?= htmlspecialchars($service['description']) ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun service trouvé.</p>
    <?php endif; ?>
    <p>Nos soins comprennent le détartrage, le polissage et d'autres soins pour maintenir une bonne hygiène bucco-dentaire.</p>
</div>

<!-- Section Orthodontie -->
<div id="orthodontie" style="display: none;">
    <h2>Orthodontie</h2>
    <p>L'orthodontie concerne le traitement des mauvaises positions des dents et des mâchoires. Le Dr. Dupont est spécialisé dans :</p>
    <?php if (!empty($services)): ?>
        <?php foreach ($services as $service): ?>
            <?php if ($service['nom_service'] === 'orthodontie'): ?>
                <p><strong><?= htmlspecialchars($service['nom_service']) ?> :</strong> <?= htmlspecialchars($service['description']) ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun service trouvé.</p>
    <?php endif; ?>
    <p>Le traitement inclut des appareils dentaires, des aligneurs transparents et des solutions pour enfants et adultes.</p>
</div>

<!-- Section Implantation -->
<div id="implantation" style="display: none;">
    <h2>Implantation</h2>
    <p>Le Dr. Dupont propose des services d'implantologie pour remplacer les dents manquantes de manière durable et esthétique. Ce service inclut :</p>
    <?php if (!empty($services)): ?>
        <?php foreach ($services as $service): ?>
            <?php if ($service['nom_service'] === 'implantation'): ?>
                <p><strong><?= htmlspecialchars($service['nom_service']) ?> :</strong> <?= htmlspecialchars($service['description']) ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun service trouvé.</p>
    <?php endif; ?>
    <p>Nos implants dentaires sont conçus pour s'intégrer parfaitement avec vos dents naturelles, garantissant un sourire naturel et une excellente fonctionnalité.</p>
</div>

<a href="/">Retour à l'accueil</a>

</body>
</html>



