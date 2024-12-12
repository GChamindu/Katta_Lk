<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipagesController extends Controller
{
    public function index_one()
    {
        return view('multiPages/index-one');
    }

    public function index_two()
    {
        return view('multiPages/index-two');
    }

    public function index_three()
    {
        return view('multiPages/index-three');
    }

    public function index_four()
    {
        return view('multiPages/index-four');
    }

    public function index_five()
    {
        return view('multiPages/index-five');
    }

    public function index_six()
    {
        return view('multiPages/index-six');
    }

    public function index_seven()
    {
        return view('multiPages/index-seven');
    }

    public function index_eight()
    {
        return view('multiPages/index-eight');
    }
}
