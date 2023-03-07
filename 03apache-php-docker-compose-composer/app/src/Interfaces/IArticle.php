<?php

namespace App\Interfaces;

interface IArticle {
    public function getArticles();
    public function getArticle(int $id);
}
