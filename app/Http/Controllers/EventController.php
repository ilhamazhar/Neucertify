<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Event::class);

        $events = Event::all();

        return view('acara.index', compact('events'));
    }
}
