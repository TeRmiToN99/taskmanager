<?php

namespace App\Controllers;


use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    public function beforeAction()
    {

    }

    public function actionIndex()
    {
        $this->view->title = 'taskmanager | Новости.';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionArticle()
    {
        $id = (int)$_GET['id'];
        $this->view->article= \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/article.php');
    }
}