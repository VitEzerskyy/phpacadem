<?php


class Controller
{
    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function __destruct()
    {
        $this->view->render();
    }
}