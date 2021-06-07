<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        dd(auth()->user());
        return view('home');
    }
}
