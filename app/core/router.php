<?php
class Router
{
    static function start()
    {
        /**
         * default controller and action
         */
        $controller_name = 'Main';
        $action_name = 'index';

        /**
         * parse URI and get controller and action names
         * @var array
         */
        $routes = explode('/', $_SERVER['REQUEST_URI']);
//        $routes = array_slice($routes, 1);
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }
        /**
         * Define model, where model name = 'Model_' prefix + controller name,
         * and include if exist.
         *
         * Concatenate prefix to controller and action
         * and include if exist.
         * @var string
         */
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        $model_file = strtolower($model_name).'.php';
        $model_path = "app/models/".$model_file;

        if(file_exists($model_path))
        {
            include "app/models/".$model_file;
        }

        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "app/controllers/".$controller_file;
        }
        else
        {
            Router::ErrorPage404();
        }
        /**
         * get instance of controller
         * and call action
         */
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
            Router::ErrorPage404();
        }

    }

    public static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}
