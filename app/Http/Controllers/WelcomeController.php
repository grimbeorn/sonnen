<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {

    	if (auth()->check()) {
    		return redirect('/admin/library');
    	}
        else {
        	return view('welcome');
        }
    }
}
