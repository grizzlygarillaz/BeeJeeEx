<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (!empty($_POST))
        {
            $this->view->message('error', 'error te-xt');
        }
        $this->view->render('Auth page');
    }

    public function registerAction()
    {
        $this->view->render('Register page');
    }
}