<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function admin_index()
    {
        $reservations = Reservation::paginate(10);

        return view('admin.reservations.index', compact('reservations'));
    }
}
