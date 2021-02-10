<?php


namespace Controller;


use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Database\Query\PreparedQuery;

class ProjectController extends AbstractController
{
    /**
     * ProjectController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @Route(route="/projects", name="projects")
     */
    public function project_list()
    {
        $query = new PreparedQuery('SELECT name,description,updatedAt FROM project ORDER BY updatedAt DESC');
        $projets = $query->getResult();

        return $this->render('projects/projects.html.twig', [
            'projects' => $projets
        ]);
    }
}