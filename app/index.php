<?php

    require_once "./vendor/autoload.php";
    require_once "./Source/Config/Const.php";
    require_once "./Source/Config/Route.php";

    use Autoload\Lib\Route\Route;

    $useRoute   = new Route();

    $route = $useRoute->routeData(0)."/".$useRoute->routeData(1);

    $routeReturn = $useRoute->routeReturn(ROUTES, $route);

    if ($routeReturn == true)
    {
       require_once ROUTES[$route];
    }
    else
    {
        require_once ROUTES['error/404'];
    }