<?php

namespace Controller;

use Fork\Annotations\Route;
use Fork\Controller\AbstractController;

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

    }
}