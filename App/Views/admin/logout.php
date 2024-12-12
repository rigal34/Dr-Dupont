<?php
// logout.php

session_start();

// Rediriger si personne n'est connecté
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: /index.php");
    exit();
}

// Si connecté, détruire la session
session_unset();
session_destroy();

// Rediriger vers la page d'accueil
header("Location: /index.php");
exit();


