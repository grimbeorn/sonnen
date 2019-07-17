<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index()
    {
    	return view('admin.quoting.index');
    }
    public function create()
    {
    	return view('admin.quoting.create');
    }
    public function store()
    {
    	
    }
}
