<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function service(){
        return view('home.service');
    }

    public function medecin(){
        return view('home.medecin');
    }

    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}
