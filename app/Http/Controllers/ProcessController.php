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
        
        // Récupérer tous les racks non utilisés
        $racksNonUtilises = Rack::whereNull('end_date')
            ->orWhere('end_date', '<', Carbon::now())
            ->get();
        
        
        // Maintenant, vous pouvez assigner un rack parmi les racks non utilisés
        if ($racksNonUtilises->isNotEmpty()) {
            $rackAssigner = $racksNonUtilises->first();
            // achat du rack en qestion
        } else {
            // Aucun rack disponible pour l'assignation
        }
        




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
