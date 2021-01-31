<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seat;

class SeatController extends Controller
{
    public function index() {
        $seats = Seat::all();
        return view('pages.seats', compact('seats'));
    }

    public function show($id) {
        $seat = Seat::findOrFail($id);
        return view('pages.seat', compact('seat'));
    }
}
