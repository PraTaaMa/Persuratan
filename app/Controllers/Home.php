<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
        public function signup()
    {
        return view('signup');
    }
        public function signin()
    {
        return view('signin');
    }    
}
