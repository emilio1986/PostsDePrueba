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

    //public function __construct()        // LO deshabilito para q me deje entrar derecho sin controlar
    //{
      //  $this->middleware('auth');   //
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('inicio');                     //le inserto la vista inicio creada para mostrar los posts
    }

    public function post()
    {
        return view('post');                     //le inserto la vista post creada para mostrar el post
    }
}
