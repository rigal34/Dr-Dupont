<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos du Dr. Dupont</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1, h2 {
            color: #2c3e50;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            border-radius: 50%;
            margin-right: 20px;
        }

        .qualifications, .team {
            margin-bottom: 40px;
        }

        .team-member {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<div class="container">
    <h1>À propos du Dr. Dupont</h1>

    <!-- Présentation générale du Dr. Dupont -->
    <div class="profile">
        <img src="/assets/images/dr-dupont.jpg" alt="Dr. Dupont" width="150" height="150">
        <div>
            <h2>Dr. Jean Dupont</h2>
            <p>Le Dr. Jean Dupont est un chirurgien-dentiste reconnu pour son expertise en soins dentaires complets, avec plus de 20 ans d'expérience dans le domaine. Son approche centrée sur le patient, combinée à une expertise de pointe, fait de lui un praticien très apprécié par ses patients.</p>
        </div>
    </div>

    <!-- Parcours du Dr. Dupont -->
    <div class="qualifications">
        <h2>Parcours et qualifications</h2>
        <p>Le Dr. Dupont a obtenu son diplôme en chirurgie dentaire à l'Université de Paris en 2003. Depuis lors, il a suivi de nombreuses formations pour se spécialiser dans divers domaines de la dentisterie :</p>
        <ul>
            <li><strong>Diplôme de Chirurgie Dentaire</strong> - Université de Paris, 2003</li>
            <li><strong>Spécialisation en Implantologie Dentaire</strong> - Université de Strasbourg, 2008</li>
            <li><strong>Formation en Orthodontie</strong> - Université de Lyon, 2011</li>
            <li><strong>Certificat en Esthétique Dentaire</strong> - Institut Esthétique de France, 2015</li>
        </ul>
        <p>En plus de ces diplômes, le Dr. Dupont participe régulièrement à des conférences et des séminaires internationaux pour rester à jour sur les dernières avancées en dentisterie moderne.</p>
    </div>

    <!-- Membres de l'équipe -->
    <div class="team">
        <h2>L'équipe du Dr. Dupont</h2>
        <p>Le Dr. Dupont est entouré d'une équipe dévouée et hautement qualifiée pour garantir le meilleur service aux patients. Voici quelques membres clés de son équipe :</p>
        <div class="team-member">
            <h3>Dr. Marie Lefebvre</h3>
            <p><strong>Spécialité :</strong> Orthodontie<br>
                <strong>Formation :</strong> Université de Montpellier, diplômée en 2010</p>
        </div>
        <div class="team-member">
            <h3>Dr. Antoine Martin</h3>
            <p><strong>Spécialité :</strong> Implantologie<br>
                <strong>Formation :</strong> Université de Bordeaux, diplômé en 2012</p>
        </div>
        <div class="team-member">
            <h3>Clara Moreau</h3>
            <p><strong>Rôle :</strong> Hygiéniste dentaire<br>
                <strong>Expérience :</strong> 8 ans dans l'assistance en soins dentaires</p>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact">
        <h2>Contactez-nous</h2>
        <p>Pour toute question ou pour prendre rendez-vous, n'hésitez pas à nous contacter au <strong>01 23 45 67 89</strong> ou à nous envoyer un e-mail à <strong>contact@dr-dupont.com</strong>.</p>
    </div>
</div>

</body>
</html>
