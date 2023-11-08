<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\Aappoinment;
class AdminCome extends Controller
{
    public function addview()
    {


        return view ('admin.add_team');
    }
   
    public function upload(Request $request)
    {

        $team=new team;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('teanimage',$imagename);
        $team->image=$imagename;
        $team->name=$request->name;
        $team->phone=$request->number;
        $team->specialty=$request->specialty;
        
        $team->save();
        return redirect()->back()->with('message','Team Added Successfully');




    }

    



}
