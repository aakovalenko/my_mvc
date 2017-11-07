<?php

namespace app\controllers;
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 07.11.17
 * Time: 10:46
 */
/*
 * Posts Controller
 */
class Posts
{
    /*
     * Show the index page
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)).'</pre></p>';
    }

    /*
     * Show the add new page
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller';
    }

    public function editAction()
    {
        echo 'Hello from the adit action in the Posts controller';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)).'</pre></p>';
    }

}