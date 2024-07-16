<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use App\Models\images;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('adminPanel');
    }
    public function reservation(){

    $reservation = reservation::all(); 

        return view("reservationsAdmind",['reservations'=>$reservation]);

    }
    public function delete($id){

    
    
    $reservation = reservation::where('id',$id)->delete(); 
    $reservation = reservation::all()::with('user')->get(); 
return view('reservationsAdmind',['reservations'=>$reservation]);// Get the currently authenticated user...
    }   
       public function accept($id){

    
    
    $reservation = reservation::where('id',$id)->update(['validate'=>1]); 
    $reservation = reservation::all(); 
return view('reservationsAdmind',['reservations'=>$reservation]);// Get the currently authenticated user...
    }  
       public function image(){
               $images = images::all(); 
    return view('adminPanelImages',['images'=>$images]);
        
    }   
}
