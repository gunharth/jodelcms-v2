<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->locale = LaravelLocalization::getCurrentLocale();
    }

    public function index()
    {
    	return view('backend.dashboard');
    }

    public function projectsindex()
    {
    	$projects = Project::all();
    	return view('backend.projects', compact('projects'));
    }


}
