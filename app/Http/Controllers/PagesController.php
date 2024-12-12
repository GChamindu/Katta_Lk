<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function appoinment()
    {
        return view('pages/appoinment');
    }

    public function project()
    {
        return view('pages/project');
    }

    public function project_mesonary()
    {
        return view('pages/project-mesonary');
    }

    public function project_mesonary_v2()
    {
        return view('pages/project-mesonary-v2');
    }

    public function project_slider()
    {
        return view('pages/project-slider');
    }

    public function projects_details()
    {
        return view('pages/projects-details');
    }

    public function projects_details_2()
    {
        return view('pages/projects-details-2');
    }

    public function team()
    {
        return view('pages/team');
    }

    public function team_2()
    {
        return view('pages/team-2');
    }

    public function team_details()
    {
        return view('pages/team-details');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function notFound()
    {
        return view('pages/notFound');
    }

}
