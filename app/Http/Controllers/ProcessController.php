<?php

namespace App\Http\Controllers;

use App\Models\Bay;
use App\Models\Order;
use App\Models\Rack;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    public function store(Request $request)
    {

        $rackAcheter = 2;
        $racksParBay = 2;
        
        $bays = Bay::all();
        $dateActuelle = Carbon::now();
        
        

        dd("d");
        $process = new Order();
        $process->user_id = Auth::user()->id;
        $process->rack_id = 1;
        $process->price = 10;
        $process->discount = "1";
        $process->start_date = Carbon::now();
        $process->end_date = Carbon::now();
        $process->save();

        return view('dashboard.index');
    }
}
