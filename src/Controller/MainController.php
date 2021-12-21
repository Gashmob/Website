<?php

namespace Controller;

use CategoryManager;
use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Response\Response;
use ProjectManager;

class MainController extends AbstractController
{

    /**
     * @Route(route="/", name="home")
     * @return Response
     */
    public function homepage(): Response
    {
        $projects = ProjectManager::getNb(3);

        return $this->render('home/homepage.html.twig', [
            'projects' => $projects
        ]);
    }

    /**
     * @Route(route="/projects", name="projects")
     * @return Response
     */
    public function projects(): Response
    {
        $projects = ProjectManager::getAll();
        $categories = CategoryManager::getAllCategoriesWithNumbers();

        return $this->render('home/projects.html.twig', [
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }
}