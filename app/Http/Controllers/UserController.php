<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $institutes = User::all();
        return view('instansi.index', compact('institutes'));
    }

    public function destroy()
    {
        //
    }
}
