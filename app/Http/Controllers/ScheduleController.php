<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {

       // return view('pages.settings');

        // dd("test");
        // die();
        // $request->validate([
        //     'mon' => 'required',
        //     'tue' => 'required',
        //     'wed' => 'required',
        //     'thu' => 'required',
        //     'fri' => 'required',
        //     'sat' => 'required',
        //     'sun' => 'required',
        //     'time_from' => 'required',
        //     'time_to' => 'required',
        //     'location' => 'required',
        // ]);

        Schedule::create([
            'mon' => $request->mon,
            'tue' => $request->tue,
            'wed' => $request->wed,
            'thu' => $request->thu,
            'fri' => $request->fri,
            'sat' => $request->sat,
            'sund' => $request->sun,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'location' => $request->location,
        ]);

        return redirect()->route('settings');
        // ->withSuccess('Setting has been updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
