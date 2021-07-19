<?php

namespace App\Http\Controllers;

use App\Models\VoterList;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class VoterListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = QueryBuilder::for(VoterList::class)
            ->allowedFilters(['constituency_name', 'moza_daha_city', 'patwar_circle_name',
                'tehsil', 'district', AllowedFilter::exact('constituency_area_number'), 'union_council',
                AllowedFilter::exact('gender'), 'name', 'father_husband_name', 'cnic', 'occupation', 'age', 'address',
                'mobile_number', 'polling_station_no', 'potential_voter',])
            ->get();
        return view('voter-list.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voter-list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VoterList::create($request->all());
        session()->flash('message', 'آپ کا رکارڈ محفوظ ہو گیا ہے۔');
        return redirect()->route('voterList.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\VoterList $voterList
     * @return \Illuminate\Http\Response
     */
    public function show(VoterList $voterList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\VoterList $voterList
     * @return \Illuminate\Http\Response
     */
    public function edit(VoterList $voterList)
    {
        return view('voter-list.edit', compact('voterList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VoterList $voterList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoterList $voterList)
    {
        $voterList->update($request->all());
        session()->flash('message', 'آپ کا رکارڈ ترمیم ہو گیا ہے۔');
        return redirect()->route('voterList.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\VoterList $voterList
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoterList $voterList)
    {
        //
    }

    public function reportAreaWise(Request $request)
    {
        $collection = QueryBuilder::for(VoterList::class)
            ->allowedFilters(['constituency_name', AllowedFilter::exact('constituency_area_number')])
            ->groupBy('gender')->select('gender', \DB::raw('count(*) as total'))
            ->orderBy('gender','asc')
            ->get('gender');
        
        return view('voter-list.reportAreaWise', compact('collection'));
    }
}
