<?php

use App\Classes\Comment;

require_once './../../vendor/autoload.php';
session_start();

$action = $_GET['action'] ?? '';

if (!isset($action)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

switch ($action) {
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $texte = trim($_POST['texte'] ?? '');
            $id_client = $_POST['id_client'] ?? null;
            $id_article = $_POST['id_article'] ?? null;

            if (empty($texte) || empty($id_client) || empty($id_article)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            $comment = new Comment($texte, (int)$id_client, (int)$id_article);
            $comment->addComment();

            header('Location: ../Views/Client/blog/Article.php?id_article=' . $id_article . '#comments');
            exit();
        }
        break;

    case 'update':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $texte = trim($_POST['texte'] ?? '');
            $id_comment = $_POST['id_comment'] ?? null;
            $id_article = $_POST['id_article'] ?? null;

            if (empty($texte) || empty($id_comment)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            Comment::updateComment($texte, (int)$id_comment);

            header('Location: ../Views/Client/blog/Article.php?id_article=' . $id_article . '#comments');
            exit();
        }
        break;

    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id_comment = $_GET['id_comment'] ?? null;

            if (empty($id_comment)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            Comment::deleteComment((int)$id_comment);

            header('Location: ../Views/Client/blog/Article.php?id_article=' . $id_article . '#comments');
            exit();
        }
        break;

    default:
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
}
