<?php

namespace App\Http\Controllers;

class SliderController extends Controller
{
    private $path = 'admin.pages.slider.';
    private $controller = 'slider';

    public function __construct()
    {
        view()->share('controller', $this->controller);
    }

    public function index()
    {
        return view($this->path . 'index');
    }
}
