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
        if (isset($uriSegments[1])) {
            switch ($uriSegments[1]) {
                case 'create':
                    $controller->create();  // Page pour créer un nouveau service
                    break;
                case 'store':
                    $controller->store();  // Enregistre un nouveau service
                    break;
                case 'edit':
                    $controller->edit($uriSegments[2] ?? null);  // Page d'édition pour un service spécifique
                    break;
                case 'update':
                    $controller->update($uriSegments[2] ?? null);  // Met à jour un service spécifique
                    break;
                case 'delete':
                    $controller->delete($uriSegments[2] ?? null);  // Supprime un service spécifique
                    break;
                default:
                    $controller->index();  // Page principale de la liste des services
                    break;
            }
        } else {
            $controller->index();  // Affiche la liste des services si aucun segment d'URI n'est fourni
        }
        break;

    case 'about':  // Nouvelle route pour la page À propos
        $controller = new AboutController();
        $controller->index(); // Affiche la page "À propos"
        break;
    case 'news':  // Gestion des actualités
        $controller = new NewsController();
        if (isset($uriSegments[1])) {
            switch ($uriSegments[1]) {
                case 'create':
                    $controller->create();  // Affiche le formulaire de création d'actualité
                    break;
                case 'store':
                    $controller->store();  // Enregistre une nouvelle actualité
                    break;
                case 'edit':
                    $controller->edit($uriSegments[2] ?? null);  // Page d'édition pour une actualité spécifique
                    break;
                case 'update':
                    $controller->update($uriSegments[2] ?? null);  // Met à jour une actualité spécifique
                    break;
                case 'delete':
                    $controller->delete($uriSegments[2] ?? null);  // Supprime une actualité spécifique
                    break;
                default:
                    $controller->index();  // Page principale pour afficher toutes les actualités
                    break;
            }
        } else {
            $controller->index();  // Affiche la liste des actualités si aucun segment d'URI n'est fourni
        }
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
