<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Hour;
use Illuminate\Support\Facades\DB;

class HourController extends Controller
{
    //
    public function getData()
    {
        $today = Carbon::today();
        $today_hour = Hour::where('date', $today)->first();
        $month_hour = Hour::whereMonth('date', $today->month)->selectRaw('SUM(hours) as hours')->first();
        $total_hour = Hour::selectRaw('SUM(hours) as hours')->first();

        $record_dates = Hour::whereMonth('date', $today->month)
        ->pluck('date')
        ->map(function ($date) {
            return Carbon::parse($date)->format('j');
        })->toArray();

        $record_hours = Hour::whereMonth('date', $today->month)->pluck('hours')->toArray();

        $languages = DB::table('hour_language')->selectRaw('SUM(language_hour) as language_hour')->groupBy('language_id')->pluck('language_hour')->toArray(); 

        $contents = DB::table('hour_content')->selectRaw('SUM(content_hour) as content_hour')->groupBy('content_id')->pluck('content_hour')->toArray();

        return view('index', compact('today_hour', 'month_hour', 'total_hour', 'record_dates', 'record_hours', 'languages', 'contents'));
    }
}
