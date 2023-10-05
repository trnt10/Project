<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Schedule;
use App\Models\Attemp;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function timestamp()
    {
        //
        $attemp_timestamp = ['attemp_timestamp'];

        $attemp = Attemp::select($attemp_timestamp)->first();

        // $date = $attemp_timestamp->format('Y-m-d');
        // $time = $attemp_timestamp->format('H:i');

        //เวลาปัจจุบัน
        $current_time = Carbon::now()->format('H:i:s');


        return view('users.timestamp', compact('current_time','attemp'));
    }
}
