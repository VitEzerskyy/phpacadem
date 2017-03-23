<?php


class View
{
    protected $router;
    protected $path;
    protected $properties;
    protected $content;
    protected $layout;
    public $renderLayout = true;
    public $renderView = true;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->path = "../app/modules/" . $router->getModule() . "/views/" . $router->getController() . "/" . $router->getAction() . ".phtml";
        $this->layout = "../app/modules/" . $router->getModule() . "/views/layout.phtml";
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function action($action = null, $controller = "index", $module = "default")
    {
        if (is_null($action)){
            return false;
        }

        $this->path = "../app/modules/" . $module . "/views/" . $controller . "/" . $action . ".phtml";

        include $this->path;
    }

    public function render()
    {
            ob_start();
            include $this->path;
            $this->content = ob_get_clean();

            if($this->renderLayout){
                include $this->layout;
            }
        }
}