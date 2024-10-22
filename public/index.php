<?php
require_once '../vendor/autoload.php';
require_once '../App/Config/config.php';

use App\Controllers\ArticleController;
use App\Controllers\PatientController;
use App\Controllers\RendezVousController;
use App\Controllers\ServiceController;
use App\Controllers\AboutController;
use App\Controllers\NewsController;
use App\Controllers\InscriptionController;
$uri = $_SERVER['REQUEST_URI'] ?? '/';
$uriSegments = explode('/', trim(parse_url($uri, PHP_URL_PATH), '/'));

switch ($uriSegments[0]) {
    case '':
    case '/':
    case 'index.php':
        $articleController = new ArticleController();
        $articleController->index();
        break;

    case 'patient':
        $controller = new PatientController(); // Pas besoin du qualificateur complet
        if (isset($uriSegments[1]) && $uriSegments[1] === 'create') {
            $controller->create();
        } elseif (isset($uriSegments[1]) && $uriSegments[1] === 'store') {
            $controller->store();
        }
        break;

    case 'rendezvous':
        $controller = new RendezVousController();
        $controller->add();
        break;

    case 'services':  // Nouvelle route pour la page des services
        $controller = new ServiceController();
        $controller->index(); // Affiche la page des services
        break;

    case 'about':  // Nouvelle route pour la page À propos
        $controller = new AboutController();
        $controller->index(); // Affiche la page "À propos"
        break;
    case 'news':  // Route pour la page d'actualités
        $controller = new NewsController(); // Gère la page statique
        $controller->index(); // Affiche la page d'actualités
        break;

    case 'inscription':
        $controller = new InscriptionController();
        $controller->index();
        break;


    default:
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
        break;
}
