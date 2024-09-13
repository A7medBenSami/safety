<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function index()
    {

        $projects = Project::take(3)->get();
        return view('front.index',compact('projects'));
    }

    public function projects()
    {
        $projects = Project::get();
        return view('front.projects',compact('projects'));

    }

    public function services()
    {

        $services = Service::first();
        return view('front.services',compact('services'));
    }

    public function systems()
    {
        return view('front.systems');
    }

    public function dash()
    {
        return view('home');
    }
}