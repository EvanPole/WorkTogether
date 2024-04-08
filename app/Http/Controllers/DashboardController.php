<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $allracksinfo = Rack::where('user_id', Auth::user()->id)->get();
        return view('dashboard.dashboard', compact('allracksinfo'));
    }

    public function edit() {

    }
}
