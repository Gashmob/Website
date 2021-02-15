<?php


namespace Controller;


use Entity\EntityManager;
use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Response\Response;

class ProjectController extends AbstractController
{
    /**
     * ProjectController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @Route(route="/projects", name="listProjects")
     */
    public function listProjects(): Response
    {
        return $this->render('project/listProjects.html.twig', [
            'projects' => EntityManager::getAllProjects()
        ]);
    }
}