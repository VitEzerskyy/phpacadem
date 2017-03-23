<?php


class App
{
    public static $router;

    public static function run($uri)
    {
        self::$router = new Router($uri);
        $view = new View(self::$router);

        $controller_class = ucfirst(self::$router->getController()) . "Controller";

        if(self::$router->getModule() == "admin") {
            $controller_class = "admin_" . $controller_class;
        }
       
        $action  = self::$router->getAction() . "Action";

        $controller = new $controller_class($view);
        $controller->$action();
//       $view->render();
    }
}