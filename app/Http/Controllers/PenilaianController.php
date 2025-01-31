<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = [];
        return view('penilaian.index', compact('penilaian'));
    }

}
