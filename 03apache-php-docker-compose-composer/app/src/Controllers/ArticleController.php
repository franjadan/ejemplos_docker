<?php

namespace App\Controllers;

use App\Interfaces\IArticle;
use Twig\Environment;

class ArticleController {

    /**
     * @var IArticle
     */
    protected IArticle $articleRepository;

    /**
     * @var Environment
     */
    protected Environment $twig;

    /**
     * HomeController constructor.
     * @param IArticle $articleRepository
     * @param Environment $twig
     */
    public function __construct(IArticle $articleRepository, Environment $twig)
    {
        $this->articleRepository = $articleRepository;
        $this->twig = $twig;
    }

    public function index() {
        echo "Hola desde el " . __CLASS__;
    }

    public function articulos() {
        echo $this->twig->render('home.twig', [
            "articles" => $this->articleRepository->getArticles()
        ]);
    }

    public function articulo(int $id) {
        $article = $this->articleRepository->getArticle($id);
        var_dump($article);
    }
}
