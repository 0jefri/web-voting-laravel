<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = [];
        return view('pendaftaran.index', compact('pendaftaran'));
    }

}
