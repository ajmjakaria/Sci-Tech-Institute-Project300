<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class After_loginController extends Controller
{
    //
    public function index_login()
    {
        return view('after_login.index-login');
    }
}
