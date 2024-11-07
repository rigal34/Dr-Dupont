<?php
try {
    // Connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Données de test à insérer
    $nom = "TestNom";
    $prenom = "TestPrenom";
    $email = "test@test.com";
    $telephone = "0123456789";
    $date_naissance = "1990-01-01";
    $password = password_hash('mon_mot_de_passe', PASSWORD_BCRYPT);

    // Préparer et exécuter l'insertion
    $stmt = $pdo->prepare("INSERT INTO patients (nom, prenom, email, telephone, date_naissance, password) 
                           VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :password)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':date_naissance', $date_naissance);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    echo "Données insérées avec succès !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


