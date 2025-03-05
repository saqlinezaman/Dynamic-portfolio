<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }
    // username
    public function name_update(Request $request){
        $request->validate([

            "name" => 'required |alpha',

        ]);

        User::find(Auth::user()->id)->update([
            "name"=>$request->name,
            "update_at"=> now(),
        ]);
        return back();
    }
    // email
    public function email_update(Request $request){
        $request->validate([
            "email" => "required",
        ]);
        User::find(Auth::user()->id)->update([
            "email"=> $request->email,
            "update_at"=> now(),
        ]);
        return back();
    }
}
