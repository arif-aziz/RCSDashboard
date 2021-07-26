<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use App\Raw;
use DB;

class RawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // View Raw Index
        $raw = Raw::all();
        return View::make('raw.index')->with('raw',$raw);
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
        // Store Raw
        if($request->hasFile('fileraw'))
        {
            $path = $request->file('fileraw')->path();
            $data = \Excel::load($path)->get();

            if($data->count())
            {
                foreach ($data as $key => $value) 
                {
                    $date   = strtotime($value->day);
                    $month  = date('m',$date);
                    $year   = date('Y',$date);

                    $temp[] = [ 'rcsdate'           => $value->day,
                                'rcsmonth'          => $month,
                                'rcsyear'           => $year,
                                'rcscluster'        => $value->cluster,
                                'rcsoutletid'       => $value->outlet_id,
                                'rcsoutletname'     => $value->outlet_name,
                                'rcssalesname'      => $value->sales_name,
                                'rcsscc'            => $value->scc,
                                'dla2'              => $value->dl_a2,
                                'dlbse'             => $value->dl_bse,
                                'dlprime'           => $value->dl_prime,
                                'dll'               => $value->dl_l,
                                'dlmifi'            => $value->dl_mifi,
                                'dlspgsm'           => $value->dl_sp_gsm,
                                'dlspnow'           => $value->dl_sp_now,
                                'dlspnowplus'       => $value->dl_sp_now_plus,
                                'opa2'              => $value->op_a2,
                                'opbse'             => $value->op_bse,
                                'opprime'           => $value->op_prime,
                                'opl'               => $value->op_l,
                                'opmifi'            => $value->op_mifi,
                                'opspgsm'           => $value->op_sp_gsm,
                                'opspnow'           => $value->op_sp_now,
                                'opspnowplus'       => $value->op_sp_now_plus,
                                'chipeloadreg'      => $value->chip_eload_reg,
                                'chipeloadtrx'      => $value->chip_eload_trx,
                                'srisreg'           => $value->sris_reg,
                                'srisinsentive'     => $value->sris_insentive,
                                'jcplan'            => $value->jc_plan,
                                'jcactual'          => $value->jc_actual,
                                'jceffective'       => $value->jc_effective ];
                }

                if(!empty($temp))
                {
                    $raw = new Raw;
                    $raw->insert($temp);
                    
                    /*
                    echo "<pre>";
                    print_r($temp);
                    echo "</pre>";
                    */
                    
                    dd('Insert Recorded successfully.');
                }
            }
        }
        else
        {
            dd('gagal');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Show the form for downloading a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($format)
    {
        //
        $data = Raw::get()->toArray();

        return \Excel::create('rcsraw', function($excel) use ($data) {
            $excel->sheet('Sheet1', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($format);
    }
}
