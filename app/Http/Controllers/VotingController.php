<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class VotingController extends Controller
{
    public function index()
    {
        $voting = [];
        return view('voting.index', compact('voting'));
    }

}
