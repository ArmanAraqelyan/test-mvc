<?php

namespace App;

use App\Controllers\PageController;

class Route
{
    public function dispatch()
    {
        switch (ltrim($_SERVER['REQUEST_URI'], '/')) {
            case '':
                $this->home();
                break;
            case 'folder1':
                $this->folder1();
                break;
            case 'folder2':
                $this->folder2();
                break;
            default:
                $this->notFound();
                break;
        }
    }

    public function home()
    {
        $controller = new PageController();
        $controller->home();
    }

    public function folder1()
    {
        $controller = new PageController();
        $controller->folder1();
    }

    public function folder2()
    {
        $controller = new PageController();
        $controller->folder2();
    }

    public function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        echo '404 Not Found';
    }
}
