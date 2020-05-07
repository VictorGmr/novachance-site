<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home.home');
    }

    public function sobre()
    {
        return view('home.about');
    }

    public function ncon()
    {
        return view('home.blog');
    }

    public function discipulado()
    {
        return view('home.elements');
    }

    public function contato()
    {
        return view('home.contact');
    }
}
