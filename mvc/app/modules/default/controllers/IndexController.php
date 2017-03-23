<?php


class IndexController extends Controller
{
    public function __construct(View $view)
    {
        parent::__construct($view);
    }

    public function indexAction()
    {
        $this->view->class = __CLASS__;
    }

    public function jsonAction()
    {
        $arr = array(1, 2, 3, 4, 5);

        $this->view->renderLayout = false;
        $this->view->renderView = false;

        echo json_encode($arr);
    }

    public function menuAction()
    {
        $this->view->renderLayout =false;
    }

}