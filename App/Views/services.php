<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation des services</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
<!-- Liste des services -->
<?php if (!empty($services)): ?>
    <?php foreach ($services as $service): ?>
        <div class="service-section">
            <h2><?= htmlspecialchars($service['nom_service']) ?></h2>
            <p><?= htmlspecialchars($service['description']) ?></p>

            <div class="action-buttons">
                <a href="/services/edit/<?= $service['id'] ?>" class="btn btn-secondary">Modifier</a>
                <a href="/services/delete/<?= $service['id'] ?>" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce service ?')">Supprimer</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun service trouvé.</p>
<?php endif; ?>







<!-- Bouton pour créer un nouveau service -->
<div style="text-align: center; margin: 20px;">
    <a href="/services/create" class="btn btn-primary">Créer un nouveau service</a>
</div>

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
    <div class="action-buttons">
        <a href="/services/edit/1" class="btn btn-secondary">Modifier</a>
        <a href="/services/delete/1" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce service ?')">Supprimer</a>
    </div>
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
    <div class="action-buttons">
        <a href="/services/edit/2" class="btn btn-secondary">Modifier</a>
        <a href="/services/delete/2" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce service ?')">Supprimer</a>
    </div>
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
    <div class="action-buttons">
        <a href="/services/edit/3" class="btn btn-secondary">Modifier</a>
        <a href="/services/delete/3" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce service ?')">Supprimer</a>
    </div>
</div>

<a href="/" class="back-to-home">Retour à l'accueil</a>

</body>
</html>




