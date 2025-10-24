<?php

class Router {
    public function routeRequest() {
        
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'home':
                require_once __DIR__ . '/../../templates/pages/homepage.php';
                break;

            case 'livres':
                require_once __DIR__ . '/../../templates/pages/livres.php';
                break;

            case 'login':
                require_once __DIR__ . '/../../templates/pages/Login.php';
                break;

            case 'inscription':
                require_once __DIR__ . '/../../templates/pages/inscription.php';
                break;

            case 'messages':
                require_once __DIR__ . '/../../templates/pages/Messagerie.php';
                break;

            case 'profile':
                require_once __DIR__ . '/../../templates/pages/Moncompte.php';
                break;

            default:
                require_once __DIR__ . '/../../templates/pages/homepage.php';
                break;
        }
    }
}
