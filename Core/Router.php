<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.11.17
 * Time: 15:31
 */
/*
 * ROUTER
 */

class Router
{
    protected $routes = [];

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}