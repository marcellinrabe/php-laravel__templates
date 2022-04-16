<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){

        /* la fonction online est à créer pour nous fournir la liste des jobs en ligne
        c'est-à-dire les jobs encore disponible sur la page en ligne */
        $jobs = Job::online()->latest()->get();
        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $id){
        $job = $id;
        return view('jobs.show', compact('job'));
    }
}
