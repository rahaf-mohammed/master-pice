<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Team;

use App\Models\Aappointment;

class HomeCome extends Controller
{
    public function redirect()
    {
       if(Auth::id())
       {
          if(Auth::user()->usertype=='0')
           {
             return view('user.home');
           }
           else
           {
             return view('admin.home');
           }
       }
       else 
       {
          return redirect()->back();
       }


    }

    public function index()
     {

      if(Auth::id())
      {
         return redirect('home');
      }
      else

      {
         $team =Team::all();

        return view('user.home',compact('team'));
     }
 
   }

   public function getTeam(){
      $team =Team::all();

      return view('front.team',compact('team'));

   }
  

   
  

   public function Aappointment(Request $request)
   {

      $data = new Aappointment;

      $data->name=$request->name;
      $data->email=$request->email;
      $data->team=$request->team;

      $data->date=$request->date;
      $data->time=$request->time ;
      $data->status='In progress'; 

      if(Auth::id())
      {
         $data->user_id=Auth::user()-> id;
      }
     
      $data->save();

      return redirect('home')->with('message','Appointment Request Successful .We will contact with you soon ');



   } 

   public function getAappointment(){
      $team =Team::all();

      return view('front.appointment',compact('team'));

   }


}  
   

   

     

  






