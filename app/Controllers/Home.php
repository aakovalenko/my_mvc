<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 07.11.17
 * Time: 11:32
 */

namespace app\controllers;

use Core\Controller;


class Home extends Controller
{
    public function indexAction()
    {
        echo 'Hello from the index action in the Home controller';
    }

    protected function before()
    {
        echo "(before) ";
    }

    protected function after()
    {
        echo "(after)"; 
    }

}