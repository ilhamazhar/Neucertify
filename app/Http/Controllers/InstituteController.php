<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index()
    {
        // $this->authorize('viewAny', Institute::class);

        $institutes = User::all();
        dd($institutes);
        return view('instansi.index', compact('institutes'));
    }
}
