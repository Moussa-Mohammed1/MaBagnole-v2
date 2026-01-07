<?php

namespace App\Classes;

use PDO;
use PDOException;
use App\Config\Database;

class Comment
{
    private $id_comment;
    private $texte;
    private $id_client;
    private $id_article;

    public function __construct(string $texte, int $id_client, int $id_article)
    {
        $this->texte = $texte;
        $this->id_client = $id_client;
        $this->id_article = $id_article;
    }

    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function addComment(): bool
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO comment(texte, id_client, id_article)
                VALUES (?,?,?)';
        $st = $pdo->prepare($sql);
        if ($st->execute([$this->texte, $this->id_client, $this->id_article])) {
            $this->id_comment = $pdo->lastInsertId();
            return true;
        } else {
            return false;
        }
    }

    public static function updateComment($texte, $id_comment): bool
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'UPDATE comment SET texte = ? WHERE id_comment = ?';
        $st = $pdo->prepare($sql);
        if ($st->execute($texte, $id_comment)) {
            return true;
        } else {
            return false;
        }
    }

    public static function deleteComment($id_comment): bool
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM comment WHERE id_comment = ?';
        $st = $pdo->prepare($sql);
        if ($st->execute([$id_comment])) {
            return true;
        } else {
            return false;
        }
    }

    public static function getCommentByArticle($id_article): ?array
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'SELECT * FROM comment WHERE id_article = ?';
        $st = $pdo->prepare($sql);
        if ($st->execute([$id_article])) {
            return $st->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
}
