<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        return inertia::render('User/ListUser', [
            'users' =>User::get(),
        ]);
    }
    public function  create()
    {
        return inertia::render('User/CreateUser', [
            
        ]);
    }
}
