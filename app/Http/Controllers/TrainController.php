<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $today = now()->toDateString();
        
        // Ottieni i treni con data di partenza odierna
        $trains = Train::whereDate('departure_time', $today)->get();

        // Passa i treni alla vista e visualizzali
        return view('home', compact('trains'));
    }
}
