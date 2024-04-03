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

        // $validatedData = $request->validate([
        //     'purchase_option' => 'required',
        //     'custom_duration' => 'required|numeric|min:1',
        // ]);
        $rackAcheter = 2;
        $racksParBay = 2;
        
        $bays = Bay::all();
        $dateActuelle = Carbon::now();
        
        // Tableau pour stocker les bays avec leurs emplacements disponibles
        $emplacementsDisponiblesParBay = [];
        
        foreach ($bays as $bay) {
            $nombreRacksDansBay = Rack::where('bay_id', $bay->id)
                                      ->where('end_date', '>=', $dateActuelle)
                                      ->count();
                                      
            $rackDisponiblesDansBay = $racksParBay - $nombreRacksDansBay;
        
            if ($rackDisponiblesDansBay >= $rackAcheter) {
                $emplacementsDisponiblesParBay[$bay->id] = $rackDisponiblesDansBay;
            } else {
                echo "Il n'y a pas suffisamment de places de rack disponibles dans le bay {$bay->id}.</br>";
            }
        }
        
        // Répartition des emplacements sur les machines
        foreach ($emplacementsDisponiblesParBay as $bayId => $emplacementsDisponibles) {
            // Répartir les emplacements sur les machines ici
            echo "Emplacements disponibles dans le bay $bayId : $emplacementsDisponibles </br>";
        }
        

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
