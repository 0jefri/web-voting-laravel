<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class CandidateController extends Controller
{
    public function index()
    {
        $candidate = [];
        return view('candidate.index', compact('candidate'));
    }

}
