<?php


namespace Controller;


use Entity\EntityManager;
use Fork\Annotations\Route;
use Fork\Controller\AbstractController;
use Fork\Request\Request;
use Fork\Request\Session;
use Fork\Response\RedirectResponse;
use Fork\Response\Response;

class ModerationController extends AbstractController
{
    /**
     * ModerationController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @Route(route="/connection/{from}", name="connection")
     * @param $from
     * @param Request $request
     * @param Session $session
     * @return RedirectResponse|Response
     */
    public function connection($from, Request $request, Session $session)
    {
        if ($request->get('login')) {
            $login = $request->get('login');
            $password = $request->get('password');

            if ($login == 'kevin') {
                // $2y$12$4pgRS9l2CMIZCjl9HJoshO4X.aUJSd/RxLO1T466/WX9HbiLwePEu
                if (password_verify(hash('sha512', $password), '$2y$12$4pgRS9l2CMIZCjl9HJoshO4X.aUJSd/RxLO1T466/WX9HbiLwePEu')) {
                    $session->set('user', true);
                    return $this->redirectToRoute($from);
                }
            }
        }

        return $this->render('moderation/connection.html.twig');
    }

    /**
     * @Route(route="/manage", name="manage")
     * @param Session $session
     * @return RedirectResponse|Response
     */
    public function manage(Session $session)
    {
        if ($session->get('user')) {
            return $this->render('moderation/manage.html.twig');
        } else {
            return $this->redirectToRoute('connection', [
                'from' => 'manage'
            ]);
        }
    }

    /**
     * @Route(route="/manage/project", name="manage-project")
     * @param Session $session
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function manageProject(Session $session, Request $request)
    {
        if ($session->get('user')) {
            return $this->render('moderation/manageProject.html.twig', [
                'projects' => EntityManager::getAllProjects()
            ]);
        } else {
            return $this->redirectToRoute('connection', [
                'from' => 'manage-project'
            ]);
        }
    }
}