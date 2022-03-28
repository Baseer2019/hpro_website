<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function Logout(){
        Auth::logout();
        return redirect()->route('logout')->with('success', 'User Logout'); 
    }
}
