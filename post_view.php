<?php
require 'vendor/autoload.php';
require 'config.php';
require 'bootstrap.php';

use App\Models\Post;

$post=new Post;
$post->tittle="Post2";
$post->body="Cuerpo post2";
$post->image="imagen2.jpg";
$post->user_id=1;
$post->save();

$posts = Post::with('User')->orderBy('id', 'desc')->take(10)->get();
var_dump($posts[0]->tittle . " ".$posts[0]->user->name);
