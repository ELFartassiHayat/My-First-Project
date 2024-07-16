<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\images;

class ImageController extends Controller
{
      public function index()
    {
    $images = images::all(); 
    return view('images',['images'=>$images]);

    }
}
