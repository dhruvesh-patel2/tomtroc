<?php
require_once __DIR__ . '/../src/Controller/Router.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>TomTroc</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$router = new Router();
$router->routeRequest();
?>
</body>
</html>

