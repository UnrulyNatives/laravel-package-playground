<?php 

namespace UnrulyNatives\Attitudes;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class AttitudesController extends Controller
{
 
    // public function index($timezone)
    // {
    //     echo Carbon::now($timezone)->toDateTimeString();
    // }
 

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('attitudetimezones::time', compact('current_time'));
    }


}