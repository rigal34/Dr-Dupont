<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Patients</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<h1>Liste des Patients</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Date de Naissance</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($patients)): ?>
        <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= htmlspecialchars($patient['id']) ?></td>
                <td><?= htmlspecialchars($patient['nom']) ?></td>
                <td><?= htmlspecialchars($patient['prenom']) ?></td>
                <td><?= htmlspecialchars($patient['email']) ?></td>
                <td><?= htmlspecialchars($patient['telephone']) ?></td>
                <td><?= htmlspecialchars($patient['date_naissance']) ?></td>
                <td>
                    <a href="/patient/edit/<?= htmlspecialchars($patient['id']) ?>">Modifier</a>
                    <a href="/patient/delete/<?= htmlspecialchars($patient['id']) ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce patient ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">Aucun patient trouvé.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<a href="/patient/create" class="btn">Ajouter un nouveau patient</a>
</body>
</html>


