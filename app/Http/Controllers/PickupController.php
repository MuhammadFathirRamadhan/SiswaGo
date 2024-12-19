<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index()
{
    $pickups = Pickup::with('student')->get();

    return view('dashboard', compact('pickups'));
}

}
