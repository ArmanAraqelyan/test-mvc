<?php

namespace App\Views;

class View
{
    public function render($page)
    {
        $title = 'Hi';
        $content = '';

        switch ($page) {
            case 'homepage':
                $content = '<div>I\'m in the homepage</div>';
                break;
            case 'folder1':
                $content = '<div>I\'m in folder1</div>';
                break;
            case 'folder2':
                $content = '<div>I\'m in folder2</div>';
                break;
        }

        require_once __DIR__ . '/../../Templates/template.html';
    }
}
