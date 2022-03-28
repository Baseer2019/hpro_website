<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\donors;
use App\Models\Projects;


class frontendController extends Controller
{
    public function home(){
        $donors=donors::all()->last()->paginate(6);
         $projects = Projects::all();
        $users = User::all();
            return view('home', compact(['donors','projects','users']));
    }
    public function staff(){
       $users = User::orderBy('position_number', 'asc')->paginate(150);
        return view('staff', compact('users'));
    }
    public function about(){
        return view('about');
    }
    public function donor(){
         $donors=donors::all();
        return view('donor', compact('donors'));
    }
    public function projects(){
        $projects = Projects::all()->last()->paginate(6);
        return view('projects', compact('projects'));
    }


}
