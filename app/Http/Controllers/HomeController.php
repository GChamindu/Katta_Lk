<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{    
    public function about()
    {
        return view('about');
    }

    public function blog_col_1()
    {
        return view('blog-col-1');
    }

    public function blog_col_2()
    {
        return view('blog-col-2');
    }

    public function blog_details_2()
    {
        return view('blog-details-2');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        return view('index');
    }

    public function service_details()
    {
        return view('service-details');
    }

    public function service()
    {
        return view('service');
    }

    public function team_details()
    {
        return view('team-details');
    }
}
