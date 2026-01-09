<?php

use App\Classes\Tag;

require_once './../../vendor/autoload.php';
session_start();

$action = $_GET['action'] ?? '';
if (!isset($action)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
switch ($action) {
    case 'add':
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $titre = trim($_POST['titre']);
            $tag = new Tag($titre);
            $tag->addTag();
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    case 'delete': 
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            Tag::deleteTag($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    case 'update':
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = (int)$_POST['id'];
            $titre = trim($_POST['titre']);
            Tag::updateTag($titre, $id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
}
