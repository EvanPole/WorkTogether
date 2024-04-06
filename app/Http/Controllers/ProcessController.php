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


        $racks_duration = $request["custom_duration"];
        $racks_numbers = $request["purchase_option"];
        echo($racks_numbers);
        for ($i = 0; $i < $racks_numbers; $i++) {
            $racksNonUtilises = Rack::whereNull('end_date')
                ->orWhere('end_date', '<', Carbon::now())
                ->get();
        
            if ($racksNonUtilises->isNotEmpty()) {
                $rackAssigner = $racksNonUtilises->first();

                $rackAssigner->user_id = Auth::user()->id;
                $rackAssigner->end_date = Carbon::now()->addMonths($racks_duration);
                $rackAssigner->save();
        
                echo ($rackAssigner);
            } else {
                exit("Il n'y a plus de places disponibles");
            }
        }
        

        dd("s");

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
