<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\registerUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            "Fullname"=>'required',
            "email"=>'required | email | unique:users',
            "password"=>'required|confirmed',
        ]);
        //Adding user to database
            try{
                $user = new User;
                $user->fullname = $request->Fullname;
                $user->email = $request->email;
				$user->password = Hash::make($request->password);
				$user->save();
                
                auth()->attempt($request->only("email","password"));
                // auth()->attempt($credentials);
                return redirect()->route('home');
			}
			catch(Exception $e){
				return redirect('home');
			}
    }
}
