<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecordController extends Controller
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
        //
        $validate = 
        $hour = new Hour();
        $requested_date = $request->input('datepicker');
        $formatted_date = Carbon::createFromFormat('Y年m月d日', $requested_date)->format('Y-m-d');
        $hour->date = $formatted_date;
        $hour->hours = $request->input('hours');
        $hour->save();
        $request_contents = $request->input('contents');
        $request_languages = $request->input('languages');
        $request_hour = $request->input('hours');
        $content_hour = count($request_contents) > 0 ? intval(round($request_hour / count($request_contents))) : 0;
        $language_hour = count($request_languages) > 0 ? intval(round($request_hour / count($request_languages))) : 0;
        foreach ($request_contents as $content) {
            $hour->contents()->attach($content, ['content_hour' => $content_hour]);
        }
        foreach ($request_languages as $language) {
            $hour->languages()->attach($language, ['language_hour' => $language_hour]);
        }
        // session()->flash('message', '記録しました。');
        return redirect()->route('webapp');
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
