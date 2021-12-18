<?php

namespace Controller;

use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Response\Response;

class HomeController extends AbstractController
{

    /**
     * @Route(route="/", name="home")
     */
    public function homepage(): Response
    {
        return $this->render('home/homepage.html.twig');
    }
}