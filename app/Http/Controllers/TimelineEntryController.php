<?php

namespace App\Http\Controllers;

use App\TimelineEntry;
use Illuminate\Http\Request;

class TimelineEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TimelineEntry::filterPaginateOrder();
        return response()->json($items);
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
     * @param  \App\TimelineEntry  $timelineEntry
     * @return \Illuminate\Http\Response
     */
    public function show(TimelineEntry $timelineEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimelineEntry  $timelineEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(TimelineEntry $timelineEntry)
    {
        return response()
            ->json([
                'form' => $timelineEntry,
                'option' => []
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimelineEntry  $timelineEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimelineEntry $timelineEntry)
    {
        //$item = TimelineEntry::findOrFail($id);
        // $timelineEntry->update($request->all());
        $timelineEntry->update($request->only($timelineEntry->fillable));

        return response()
            ->json([
                'saved' => true
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimelineEntry  $timelineEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimelineEntry $timelineEntry)
    {
        //
    }
}
