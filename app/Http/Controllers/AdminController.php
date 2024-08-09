<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class AdminController extends Controller
{
    

    public function index()
    {
        return view('web.admin');
    }
}
