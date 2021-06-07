<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curenciesController extends Controller
{
    public function index(){
        return view('currencies');
    }

    public function setCurrency(Request $request){
        $validated = $request->validate([
            "Currency"=>'required'
        ]);
        try{
            $user = new registerUsers;
            $user->fullname = $request->Fullname;
            $user->user_email = $request->emailaddress;
            $user->user_password = Hash::make($request->password);
            $user->save();
            return redirect('home');
        }
        catch(Exception $e){
            return redirect('home');
        }
        // dd($request->Currency);
    }
}
