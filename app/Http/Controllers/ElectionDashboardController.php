<?php

namespace App\Http\Controllers;

use App\Models\ElectionDashboard;
use Illuminate\Http\Request;

class ElectionDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = ElectionDashboard::orderBy('obtain_votes', 'DESC')->get();
        return view('election-dashboard.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('election-dashboard.create');
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
     * @param  \App\Models\ElectionDashboard  $electionDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(ElectionDashboard $electionDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElectionDashboard  $electionDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectionDashboard $electionDashboard)
    {
        return view('election-dashboard.edit',compact('electionDashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ElectionDashboard  $electionDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElectionDashboard $electionDashboard)
    {
        $electionDashboard->update($request->all());
        return redirect()->route('electionDashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectionDashboard  $electionDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectionDashboard $electionDashboard)
    {
        //
    }
}
