<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    //
    protected Request $request;
    protected Auth $auth;

    public function __construct(Request $request, Auth $auth){
        $this->request = $request;
        $this->auth = $auth;
    }
}
