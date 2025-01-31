<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function add()
    {
        $users = User::all();
        return view('users.add', compact('users'));
    }

    public function import()
    {
        $users = User::all();
        return view('users.import', compact('users'));
    }
}
