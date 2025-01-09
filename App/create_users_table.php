<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestion_rendez_vous', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ";

    $pdo->exec($sql);
    echo "Table 'users' créée avec succès.<br>";

    $insertSql = "INSERT INTO users (name, email, password) VALUES
    ('Bob', 'bob@examplree.com', 'securepassword'),
    ('Bruno', 'petit@petits.com', 'password123')
    ";
    $pdo->exec($insertSql);
    echo "Données insérées avec succès.<br>";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
