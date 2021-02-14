<?php

namespace Controller;

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
        return $this->render('home/homepage.html.twig');
    }

    /**
     * @Route(route="/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('home/cv.html.twig');
    }
}