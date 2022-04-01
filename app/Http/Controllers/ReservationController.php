<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Reservation;
use DateTime;
use App\Models\SiteInfo;
use Illuminate\Http\Request;



class ReservationController extends Controller
{
    public function index(Day $day)
    {
        $days = $day->all();
        $info = SiteInfo::find(1);

        return view('reservation', [
            'days' => $days,
            'info' => $info
        ]);
    }

    public function store(Request $request, Reservation $reservation)
    {
        $today = new DateTime;
        $info = SiteInfo::find(1);
        $validate = $request->validate([
            'last_name' => ['required'],
            'phone' => ['required', 'regex:/^\+?[0-9() ]+$/'],
            'date' => ['required', 'date', 'after_or_equal:'.$today->format('d/m/Y')],
            'hour' => ['required'],
            'person' => ['required', 'integer', 'between:0,3'],
        ]);

      
        $reservation->last_name = $request->last_name;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->hours = $request->hour;
        $reservation->person = $request->person;

        $reservation->save();
        
        return back()->with('success', 'Votre reservation a été enregistré avec succès');
    }
}
