<?php

namespace App\Classes;

use App\Config\Database;
use PDO;
use App\Classes\Article;
use App\Classes\Tag;

use PDOException;

class ArticleTags
{
    private static function insert(Article $article, Tag $tag)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO article_tag(id_article, id_tag)
                VALUES (?,?)';
        $st = $pdo->prepare($sql);
        $st->execute([$article->id_article, $tag->id_tag]);
    }
    public static function addArticleTags(Article $article, array $tags)
    {
        foreach ($tags as $tag) {
            self::insert($article, $tag);
        }
    }
}
