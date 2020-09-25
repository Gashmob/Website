<?php

namespace Controller;

use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Request\Session;
use Fork\Response\RedirectResponse;
use YamlEditor\YamlArray;

class HomeController extends AbstractController
{
    /**
     * HomeController constructor.
     */
    public function __construct() {}


    /**
     * @Route(route="/", name="home")
     */
    public function homepage()
    {
        return $this->render('home/homepage.html.twig');
    }
}