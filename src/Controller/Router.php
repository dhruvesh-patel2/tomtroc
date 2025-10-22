<?php

class Router {
    public function routeRequest() {
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'livres':
                require_once __DIR__ . '/../../templates/pages/livres.php';
                break;

            case 'login':
                require_once __DIR__ . '/../../templates/pages/Login.php';
                break;

            default:
                require_once __DIR__ . '/../../templates/pages/homepage.php';
                break;
        }
    }
}
