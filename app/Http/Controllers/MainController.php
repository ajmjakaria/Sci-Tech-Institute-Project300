<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function single_course(){
        return view('clever_page.single-course');
    }
    public function main_java()
    {
        return view('javasidebar.index');
    }

    public function java1()
    {
        return view('javasidebar.java1');
    }
    public function java2()
    {
        return view('javasidebar.java2');
    }
    public function java3()
    {
        return view('javasidebar.java3');
    }
    public function java4()
    {
        return view('javasidebar.java4');
    }
    public function java5()
    {
        return view('javasidebar.java5');
    }
    public function courses_category()
    {  
        return view('clever_page.courses_category');
    }
}
