<?php 

namespace Laraveldaily\Timezones;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{


    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        // return view('originaltimezones::time', compact('current_time'));
        // return view('laraveldaily/timezones/time', compact('current_time'));
        return view('laraveldaily\timezones::time', compact('current_time'));
    }

    // public function index($timezone)
    // {
    //     echo Carbon::now($timezone)->toDateTimeString();
    // }

}