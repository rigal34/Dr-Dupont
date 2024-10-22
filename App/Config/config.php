<?php


try {
    $dsn = 'mysql:host=localhost;dbname=gestion_rendez_vous';
    $username = 'root'; // Remplace par tes identifiants MySQL
    $password = ''; // Remplace par ton mot de passe MySQL
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;
} catch (PDOException $e) {
    // Afficher un message d'erreur en cas de problème de connexion
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}



