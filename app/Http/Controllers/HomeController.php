<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $polls = Poll::with('options')->get();

        return view('home', compact('polls'));
    }
}
