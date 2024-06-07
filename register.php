<?php
require 'vendor/autoload.php';
require 'config.php';

use App\User;
use Illuminate\Support\Facades\Hash;

$user = new User;
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->password = password_hash('password', PASSWORD_BCRYPT);
$user->save();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Personal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro de Usuarios</h2>
        <form method="post" action="register.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <a href="post_view.php" class="btn btn-secondary mt-3">Post Gastronomy !!!!</a>
    </div>
</body>
</html>

