<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../App/Config/config.php';
require_once '../App/helpers.php';


use App\Controllers\ArticleController;
use App\Controllers\PatientController;
use App\Controllers\RendezVousController;
use App\Controllers\ServiceController;
use App\Controllers\AboutController;
use App\Controllers\NewsController;
use App\Controllers\InscriptionController;
use App\Controllers\AdminController;
use App\Controllers\UserController;


$uri = $_SERVER['REQUEST_URI'] ?? '/';
$uriSegments = explode('/', trim(parse_url($uri, PHP_URL_PATH), '/'));


switch ($uriSegments[0]) {
    case '':
    case '/':
    case 'index.php':
        $articleController = new ArticleController();
        $articleController->index();
        break;
    case 'login':
        $inscriptionController = new InscriptionController();
        $inscriptionController->login();
        break;

    case 'logout' :
        $_SESSION = [];
        session_destroy();
        header('Location: /');
        break;

    case 'news':
        $newsController = new NewsController();
        $newsController->index();
        break;





    case 'administrator':
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }
        $subRoute = $uriSegments[1] ?? null;
        $adminController = new AdminController();
        if ($subRoute === 'articles') {

            // Gestion CRUD pour `administrator/articles`
            $action = $uriSegments[2] ?? null;

            switch ($action) {
                case 'create':
                    $adminController->createArticle(); // Crée un nouvel article
                    break;
                case 'edit':
                    $adminController->editArticle($uriSegments[3] ?? null); // Édite un article spécifique
                    break;
                case 'delete':
                    $adminController->deleteArticle($uriSegments[3] ?? null); // Supprime un article spécifique
                    break;
                default:
                    // Charger la page `news.php` pour la liste des actualités
                    require_once __DIR__ . '/../App/Views/news.php';
                    $adminController->articles(); // Affiche la liste des articles
                    break;
            }
        } elseif ($subRoute === 'users') {

            // Gestion CRUD pour `administrator/users`
            $userController = new UserController();
            $action = $uriSegments[2] ?? null;
            switch ($action) {
                case 'create':

                    $userController->create(); // Crée un nouvel utilisateur
                    break;
                case 'store':

                    $userController->store(); // Enregistre un nouvel utilisateur
                    break;
                case 'edit':

                    $userController->edit($uriSegments[3] ?? null); // Modifie un utilisateur spécifique
                    break;

                case 'delete':

                    $userController->delete($uriSegments[3] ?? null); // Supprime un utilisateur spécifique
                    break;
                default:

                    $userController->index(); // Liste tous les utilisateurs
                    break;
            }

        } else {
            $adminController->index(); // Route pour `administrator` uniquement si pas de sous-route `articles`
        }
        break;
    case 'patient':
        $controller = new PatientController();
        if (isset($uriSegments[1])) {
            switch ($uriSegments[1]) {
                case 'create':
                    $controller->create(); // Affiche le formulaire pour créer un patient
                    break;
                case 'store':
                    $controller->store(); // Enregistre un nouveau patient
                    break;
                case 'edit':
                    $controller->edit($uriSegments[2] ?? null); // Affiche le formulaire de modification d’un patient spécifique
                    break;
                case 'update':
                    $controller->update($uriSegments[2] ?? null); // Met à jour les informations d’un patient spécifique
                    break;
                case 'delete':
                    $controller->delete($uriSegments[2] ?? null); // Supprime un patient spécifique
                    break;
                default:
                    header("HTTP/1.0 404 Not Found");
                    echo '404 Not Found';
                    break;
            }
        } else {
            $controller->index(); // Liste des patients si aucun segment d'URI n'est fourni
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



    case 'inscription':
        $controller = new InscriptionController();
        $controller->index();
        break;


    default:
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
        break;
}
