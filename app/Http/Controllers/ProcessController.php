<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'purchase_option' => 'required',
            'custom_duration' => 'required|numeric|min:1',
        ]);

        $process = new Rack();
        $process->service = $request->input('service');
        $process->description = $request->input('desc');
        $process->price = $request->input('price');
        $process->purchase_option = $validatedData['purchase_option'];
        $process->custom_duration = $validatedData['custom_duration'];

        $process->save();

        return redirect('/')->with('success', 'Processus enregistré avec succès.');
    }
}
