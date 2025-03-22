<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;


class UserController
{
    public function index()
    {
        $users = User::all();   
 
        return view('home', ['users' => $users]);
    }
}
