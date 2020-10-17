<?php


namespace application\controllers;


use application\core\Controller;
use application\lib\DB;

class MainController extends Controller
{
    public function indexAction()
    {
        $result = $this->model->getNews();
        $vars = [
            'news' => $result
        ];
        $this->view->render('Main page', $vars);
    }
}