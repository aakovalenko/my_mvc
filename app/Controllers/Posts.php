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
    public function index()
    {
        echo 'Hello from the index action in the Posts controller';
    }

    /*
     * Show the add new page
     */
    public function addNew()
    {
        echo 'Hello from the addNew action in the Posts controller';
    }

}