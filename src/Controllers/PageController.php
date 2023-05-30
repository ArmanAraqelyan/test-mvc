<?php

namespace App\Controllers;

use App\Views\View;

class PageController
{
    public function home()
    {
        $view = new View();
        $view->render('homepage');
    }

    public function folder1()
    {
        $view = new View();
        $view->render('folder1');
    }

    public function folder2()
    {
        $view = new View();
        $view->render('folder2');
    }
}
