<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Log;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(Day $day)
    {
        $days = $day->all();

        return view('admin.day.days', [
            'days' => $days,
        ]);
    }

    public function create()
    {
        return view('admin.day.create');
    }

    public function store(Request $request, Day $day, Log $log)
    {
        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $day->day = $request->day;
        $day->hour_first = $request->hour_start;
        $day->hour_end = $request->hour_end;
        $day->open = $request->open;
        $day->save();

        $log->user_id =  auth()->user()->id;
        $log->action = "Ajout du jour {$day->day} dans la liste des horraires";
        $log->save();

        return back()->with('success', "Horraire créée avec succès");
    }

    public function getRules()
        {
    return [
        "day" => ['required'],
        "hour_start" => ['required'],
        "hour_end" => ['required'],
        "open" => ['required']
    ];

    }

    public function delete(Day $day, Log $log)
    {
        $day->delete();

        // Ajouts des logs dans la db
        $log->user_id =  auth()->user()->id;
        $log->action = "Supression des horraire du {$day->day}";
        $log->save();


        return back()->with('success', 'Horraire supprimée avec succès');
    }

    public function edit(Day $day)
    {
        return view('admin.day.edit', [
            'day' => $day
        ]);
    }
}
