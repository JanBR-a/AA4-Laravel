<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller{
    public function index(){
        $Users = User::all();
        return view('auth.login', ['users' => $Users]);
    }


}
