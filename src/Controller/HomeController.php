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
     * @return Response
     */
    public function cv(): Response
    {
        return $this->render('home/cv_fr.html.twig');
    }

    /**
     * @Route(route="/cv/fr", name="cv_fr")
     * @return Response
     */
    public function cv_fr(): Response
    {
        return $this->render('home/cv_fr.html.twig');
    }

    /**
     * @Route(route="/cv/en", name="cv_en")
     * @return Response
     */
    public function cv_en(): Response
    {
        return $this->render('home/cv_en.html.twig');
    }
}