<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index(){
        $firstname = "JURYN";
        $lastname = "TAMTAM";
        return view('pages.page1', compact('firstname', 'lastname'));
    }
}
