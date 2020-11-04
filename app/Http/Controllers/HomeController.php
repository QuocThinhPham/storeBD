<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    private $path = 'front-end.pages.home.';
    private $controller = 'home';

    public function __construct()
    {
        view()->share('controller', $this->controller);
    }

    public function index()
    {
        return view($this->path . 'index');
    }
}
