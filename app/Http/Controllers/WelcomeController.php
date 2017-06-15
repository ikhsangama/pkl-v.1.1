<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use DB;
use App\Models\Customer;
use App\Model\Agent;
use App\Models\Adventures;
use App\Models\Inf_lokasi;
use App\Models\Paket;
//mbaca otentifikasi
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['query'] = DB::table('adventures')->get();
        $data['query1'] = DB::table('inf_lokasi')->where('lokasi_kabupatenkota', '00')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_nama')->get();
        if(Auth::user()){
          $data['query2'] = Auth::user()->id;
        }
        // $data['query2'] = Auth::user()->id;
        // dd($user_id);
         return view('welcome',$data);
    //   return view('welcome',[$data,
    //   'user_id'=>$user_id,
    // ]);
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
    public function show()
    {
        $adv = $_GET['adv'];
        $destination = $_GET['destination'];
        $date = $_GET['date'];
        //select paket (kriteria ^)
        $pakets = Paket::with('schedule')
        ->whereHas('schedule',function ($q) use ($date){
          $q->where('start_date',$date);
        })
        ->where('adv_id','=',$adv)
        ->where('lokasi_id','=',$destination)->get();
        if(Auth::user()){
          $query2 = Auth::user()->id;
          return view('listing',['pakets'=>$pakets, 'query2'=>$query2]);
        }
        // dd($pakets);
       return view('listing',['pakets'=>$pakets,]);
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
