<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda des rendez-vous</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<h1>Agenda des rendez-vous pris et prise de rendez-vous</h1>

<h2>Agenda des rendez-vous pris</h2>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Date du rendez-vous</th>
        <th>Heure</th>
        <th>Type de consultation</th>
        <th>Statut</th>
        <th>ID du patient</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($rendezVous)): ?>
        <?php foreach ($rendezVous as $rendez_vous): ?>
            <tr>
                <td><?= htmlspecialchars($rendez_vous['id']) ?></td>
                <td><?= htmlspecialchars($rendez_vous['date_rendez_vous']) ?></td>
                <td><?= htmlspecialchars($rendez_vous['heure_rendez_vous']) ?></td>
                <td><?= htmlspecialchars($rendez_vous['type_consultation']) ?></td>
                <td><?= htmlspecialchars($rendez_vous['statut']) ?></td>
                <td><?= htmlspecialchars($rendez_vous['patient_id']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Aucun rendez-vous trouvé.</td>
        </tr>
    <?php endif; ?>
    </tbody>

    </tbody>
</table>

<h2>Prendre un rendez-vous</h2>
<form method="POST" action="/rendezvous">
    <label for="date_rendez_vous">Date du rendez-vous :</label>
    <input type="date" id="date_rendez_vous" name="date_rendez_vous" required><br><br>

    <label for="heure_rendez_vous">Heure du rendez-vous :</label>
    <input type="time" id="heure_rendez_vous" name="heure_rendez_vous" required><br><br>

    <label for="type_consultation">Type de consultation :</label>
    <select id="type_consultation" name="type_consultation" required>
        <option value="Consultation générale">Consultation générale</option>
        <option value="Orthodontie">Orthodontie</option>
        <option value="Implantologie">Implantologie</option>
        <option value="Contrôle de routine">Contrôle de routine</option>
    </select><br><br>

    <label for="statut">Statut :</label>
    <select id="statut" name="statut" required>
        <option value="confirmé">Confirmé</option>
        <option value="annulé">Annulé</option>
        <option value="en attente">En attente</option>
        <option value="supprimer">Suppression</option>
    </select><br><br>

    <label for="patient_id">ID du patient :</label>
    <input type="number" id="patient_id" name="patient_id" required><br><br>

    <button type="submit">Ajouter le rendez-vous</button>
</form>

<a href="/">Retour à l'accueil</a>
</body>
</html>

