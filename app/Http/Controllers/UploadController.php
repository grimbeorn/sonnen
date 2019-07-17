<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
    	return view('admin.upload.index');
    }
    public function create()
    {
    	return view('admin.upload.create');
    }
    public function store()
    {
    	
    }
}
