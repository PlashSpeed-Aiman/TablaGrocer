<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Groceries extends Controller
{
    public function index(){
        return view('groceries');
    }
    public function create(){
        return view('create-grocery');
    }
}
