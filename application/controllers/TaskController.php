<?php

namespace application\controllers;

use application\core\Controller;

class TaskController extends Controller
{
    public function indexAction()
    {
        $result = $this->model->getTasks();
        $vars = [
            'tasks' => $result
        ];
        $this->view->render('Main page', $vars);
    }

    public function addTaskAction()
    {
        $this->model->addTask($_POST['task'],$_POST['authorName'],$_POST['authorMail']);
        $this->view->redirect('/');
    }

    public function authorizeAction()
    {
        if (!empty($_POST))
        {
            $result = $this->model->authorize($_POST['login'], $_POST['password']);
            if (!$result)
            {
                
            }
        }
        $this->view->redirect('/');
    }

    public function logoutAction()
    {
        session_unset();
        $this->view->redirect('/');
    }
}