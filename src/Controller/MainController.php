<?php

namespace Controller;

use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Response\Response;
use ProjectManager;

class MainController extends AbstractController
{

    /**
     * @Route(route="/", name="home")
     */
    public function homepage(): Response
    {
        $projects = ProjectManager::getNb(3);

        return $this->render('home/homepage.html.twig', [
            'projects' => $projects
        ]);
    }
}