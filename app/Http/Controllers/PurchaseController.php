<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index() {
        return view('purchase');
    }

    public function purchase($service) {
        switch ($service) {
            case 'rac':
                $service = 'Rac';
                $price = 100;
                $desc = 'Location d\'un rac dans l\'une de nos baie';
                break;
            case 'baie':
                $service = 'Baie';
                $price = 100;
                $desc = 'Location de 42Uniter de stockage soit une baie entière ';
                break;
            default:
                die();
                break;
        }
        return view('purchase', compact('service', 'price', 'desc'))->with('service', $service);
    }
}
