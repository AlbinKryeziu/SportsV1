<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function ediProfile(Request $request)
    {
        $profile = Profile::where('user_id',Auth::id())->update([
            'first_name' =>$request->name,
            'last_name' =>$request->surname,
            'country' =>$request->country,
            'city' =>$request->city,
            'about' =>$request->about,
            'phone' =>$request->phone,
            'birthday' =>$request->birthday,
            'gender' => $request->gender,
        ]);

        if ($profile){
           $user= User::where('id' ,Auth::id())->update([
               'name' => $request->name .' '. $request->surname,
           ]);
        }
        return redirect()->back();
    }

    public function editEducation(Request $request){

         $education = new Education();
         $education->degree = $request->deegre;
         $education->faculty = $request->faculty;
         $education->from = $request->from;
         $education->to = $request->to;
         $education->city = $request->city;
         $education->country = $request->country;
         $education->description = $request->description;
         $education->user_id = Auth::id();
         $education->save();
         return redirect()->back();

    }
     
}
