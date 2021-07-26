<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Raw;
use DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // View Report Index

        return View::make('chart.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // Show Report
        $raw = Raw::select('rcsmonth',
                           'rcsyear', 
                           'mthcolor', 
                           DB::raw('SUM(dla2)    as dla2, 
                                    SUM(dlbse)   as dlbse,
                                    SUM(dlprime) as dlprime,
                                    SUM(dll)     as dll,
                                    SUM(dlmifi)  as dlmifi,
                                    SUM(dlspgsm)  as dlspgsm,
                                    SUM(dlspnow)  as dlspnow,
                                    SUM(dlspnowplus)  as dlspnowplus'))
                  ->join('monthmt','rcssummary.rcsmonth','=','monthmt.monthid')
                  ->groupBy('rcsmonth','rcsyear','mthcolor')
                  ->get();

        return response()->json($raw);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
