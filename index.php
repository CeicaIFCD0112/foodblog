<?php
require 'vendor/autoload.php';
require 'config.php';

use App\Models\User;
use App\Models\Post;

/*
$user = new User;
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->password = password_hash('password', PASSWORD_BCRYPT);
$user->save();
*/
$post=new Post;
$post->tittle="Post";
$post->body="Cuerpo post";
$post->image="imagen.jpg";
$post->user_id=1;
$post->save();
