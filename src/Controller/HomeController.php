<?php

namespace Controller;

use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Database\Query\PreparedQuery;

class HomeController extends AbstractController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @Route(route="/", name="home")
     */
    public function homepage()
    {
        $query = new PreparedQuery('SELECT title,subtitle,updatedAt FROM article ORDER BY updatedAt DESC LIMIT 5');
        $articles = $query->getResult();

        $query = new PreparedQuery('SELECT name,description,updatedAt FROM project ORDER BY updatedAt DESC LIMIT 4');
        $projets = $query->getResult();

        return $this->render('home/homepage.html.twig', [
            'articles' => $articles,
            'projects' => $projets
        ]);
    }
}