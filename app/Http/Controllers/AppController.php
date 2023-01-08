<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $stars = Star::orderBy('created_at')->get();
        return response()->view('app', compact('stars'));
    }
}
