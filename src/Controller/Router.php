
<?php

class Router {
    public function routeRequest() {
       
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'livres':
                require_once __DIR__ . '/../../templates/livres.php';
                break;

            default:
                require_once __DIR__ . '/../../templates/homepage.php';
                break;
        }
    }
}
