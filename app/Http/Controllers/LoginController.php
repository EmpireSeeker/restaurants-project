<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function log(){
        return view ('/login');
    }
}
