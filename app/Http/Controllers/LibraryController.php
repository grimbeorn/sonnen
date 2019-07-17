<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
    	return view('admin.library.index');
    }
    public function create()
    {
    	return view('admin.library.create');
    }
    public function store()
    {
    	
    }
}
