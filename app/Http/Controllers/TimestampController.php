<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attemp;
use Carbon\Carbon;

class TimestampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        // dd($request);

        $current_time = Carbon::now()->format('H:i:s');

        $attemp = new Attemp();
        $attemp->attemp_timestamp = $request->input($current_time);
        $attemp->attemp_in_out = 1;
        $attemp->save();

        return redirect()->back();
        // return redirect()->route('savetime.index')->with('success','Create Time Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
