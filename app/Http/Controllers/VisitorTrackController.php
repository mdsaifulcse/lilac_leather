<?php

namespace App\Http\Controllers;

use App\Models\VisitorTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class VisitorTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function localizationChange($locale=null){
        //return App::currentLocale();
        //\MyHelper::$availableLocales; //config('app.available_locales')

        if (isset($locale) && !in_array($locale,\MyHelper::$availableLocales)) {
            return back()->with('error','Something went wrong, try again later'); // if not found return where you want to
        }

        App::setLocale($locale);
        session()->put(['locale'=>$locale]);
        return back()->with('success','Your desire language changed successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitorTrack  $visitorTrack
     * @return \Illuminate\Http\Response
     */
    public function show(VisitorTrack $visitorTrack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitorTrack  $visitorTrack
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitorTrack $visitorTrack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitorTrack  $visitorTrack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitorTrack $visitorTrack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitorTrack  $visitorTrack
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitorTrack $visitorTrack)
    {
        //
    }
}
