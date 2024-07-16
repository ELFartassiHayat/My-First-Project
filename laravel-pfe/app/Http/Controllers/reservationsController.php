<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use App\Models\chambre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationsController extends Controller
{
  public  function  index()
    {
    
    $user = Auth::user();
// Get the currently authenticated user's ID...
    $id = Auth::id();
    $reservation = reservation::with('chambre')->where('user_id',$id)->get(); 
    $chambres=chambre::all();
return view('reservation',['reservations'=>$reservation,'chambres'=>$chambres]);// Get the currently authenticated user...
    }
      public  function  delete($id)
    {
    
    $reservation = reservation::where('id',$id)->delete(); 

 $user = Auth::user();
// Get the currently authenticated user's ID...
    $id = Auth::id();
    $reservation = reservation::with('chambre')->where('user_id',$id)->get(); 
    $chambres=chambre::all();
return view('reservation',['reservations'=>$reservation,'chambres'=>$chambres]);// Get the currently authenticated user...
    }
      public  function  add(Request $request)
    {
    $user = Auth::user();
// Get the currently authenticated user's ID...
    $id = Auth::id();
    
    $reservation=new reservation;
    $reservation->user_id=$id;
    $reservation->chambre_id=$request->chambre_id;
    $reservation->date_sortie=$request->date_sortie;
    $reservation->date_entre=$request->date_entre;
    $reservation->nombre_preson=$request->nombre_preson;
    $reservation->nombre_preson=$request->nombre_preson;
    $reservation->save();





 $user = Auth::user();
// Get the currently authenticated user's ID...
    $id = Auth::id();
    $reservation = reservation::with('chambre')->where('user_id',$id)->get(); 
    $chambres=chambre::all();
return view('reservation',['reservations'=>$reservation,'chambres'=>$chambres]);// Get the currently authenticated user...
    }

}
