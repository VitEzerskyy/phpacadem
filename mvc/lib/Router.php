<?php

class Router
{
    protected $uri, $module, $controller, $action, $routes, $path;

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module != "" ? $this->module : "default";
    }


    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller != "" ? $this->controller : "index";
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action != "" ? $this->action : "index";
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    public function __construct($uri = "")
    {
        $this->url = urldecode(trim($uri, "/"));

        $url_parts = explode("/", $this->url);

        if($url_parts[0] == "admin") {
            $this->module = array_shift($url_parts);
            $this->controller = array_shift($url_parts);
            $this->action = array_shift($url_parts);
        } else {
            list($this->path, ) = explode("?", $uri);

            try {
                $this->routes = include_once "../config/routes.php";
            } catch (Exception $e){
                throw new Exception($e->getMessage());
            }

            if(!isset($this->routes[$this->path])){
                throw new Exception("404");
            }

            $this->module = $this->routes[$this->path]["module"];
            $this->controller = $this->routes[$this->path]["controller"];
            $this->action = $this->routes[$this->path]["action"];
        }
    }
}