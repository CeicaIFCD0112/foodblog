<?php
require 'vendor/autoload.php';
require 'config.php';

use App\Models\User;
use App\Models\Post;

//------- Session Login/Register -------
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Blog of Gastronomy</title>
    <link rel="icon" type="image/jpg" href="views/img/favicon.jpg" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 text-center">
        <img src="views/img/logo.jpeg" alt="Logo" class="mb-4">
        <a href="register.php" class="btn btn-primary">Registro</a>
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>
</body>

</html>