<?php

namespace Controller;

use Entity\EntityManager;
use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Response\Response;

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
    public function homepage(): Response
    {
        $projects = array([
            'img' => 'img/fork.svg',
            'title' => 'Fork',
            'desc' => 'Framework php pour les petits sites',
            'link' => 'fork'
        ]);

        return $this->render('home/homepage.html.twig', [
            'projects' => EntityManager::get2Project()
        ]);
    }

    /**
     * @Route(route="/cv", name="cv")
     */
    public function cv(): Response
    {

        return $this->render('home/cv.html.twig');
    }
}