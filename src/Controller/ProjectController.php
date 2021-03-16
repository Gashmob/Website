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

    /**
     * @Route(route="/project/{name}", name="showProject")
     * @param $name
     * @return Response
     */
    public function showProject($name): Response
    {
        $project = EntityManager::getProjectFromName($name);

        if (is_null($project)) {
            return $this->render('errors/errorProject.html.twig', [
                'project' => $name
            ]);
        }

        $readme = '';
        $filename = 'resources/readmes/' . $project->getReadme();
        $file = fopen($filename, 'r');
        if ($file) {
            $readme = fread($file, filesize($filename));
            fclose($file);
        }

        return $this->render('project/showProject.html.twig', [
            'project' => $project,
            'readme' => $readme
        ]);
    }
}