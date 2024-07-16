<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLogin extends Controller
{
    public function index(){
        return view('loginAdmin');
    }
}
