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
    protected $params = [];


    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    /*
     * Match the route to the routes in the routing table, setting the $params
     * property if a route is found
     */
    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /*
     * Get the currently matched parameters
     */
    public function getParams()
    {
        return $this->params;
    }
}