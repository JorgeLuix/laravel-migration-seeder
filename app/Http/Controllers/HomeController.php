<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Facades\Date;


class HomeController extends Controller
{
    public function index(){
        $today = Date::now()->format('Y-m-d');
        $trains = Train::where('orario_partenza', $today)-> get();

        return view('welcome', compact('trains'));
    }
}
