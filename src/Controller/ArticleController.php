<?php


namespace Controller;


use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Database\Query\PreparedQuery;

class ArticleController extends AbstractController
{
    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @Route(route="/articles", name="articles")
     */
    public function article_list()
    {
        $query = new PreparedQuery('SELECT title,subtitle,updatedAt FROM article ORDER BY updatedAt DESC');
        $articles = $query->getResult();

        return $this->render('articles/articles.html.twig', [
            'articles' => $articles
        ]);
    }
}