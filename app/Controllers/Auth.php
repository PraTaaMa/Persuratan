<?php

namespace App\Controllers;

class Auth extends BaseController
{
        public function signup()
    {
        return view('Auth/signup');
    }
        public function signin()
    {
        return view('Auth/signin');
    }    
}
