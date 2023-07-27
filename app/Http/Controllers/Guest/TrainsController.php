<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $now = date('Y-m-d', strtotime(now()));
        $trains = Train::where('data', '=', $now)->get();

        return view('home', compact('trains'));
    }
}
