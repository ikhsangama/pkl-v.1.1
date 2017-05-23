<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use App\Models\Paket;
use App\Models\Schedule;
use App\Models\Activity;
use DB;
use App\Models\Adventures;
use App\Models\Inf_lokasi;

class PaketController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
   return view('product_detail');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $paket = new paket();
    $paket->id = $request->nomorid;
    $paket->judul = $request->title;
    $paket->description = $request->description;
    $paket->price = $request->price;
    $paket->multipic = $request->foto;
    $paket->save();

    $schedule = new schedule();
    $schedule->start_date = $request->start_date;
    $schedule->paket_id = $request->nomorid;
    $schedule->end_date = $request->end_date;
    $schedule->start_point = $request->pickuppoint;
    $schedule->end_point = $request->endpoint;
    $schedule->maxpeople = $request->peserta;
    $schedule->save();

    $activity = new activity();
    $tanggal = $request->tanggal_aktivitas;
    $time = $request->time;
    $event = $request->kegiatan;
    $i=0;
    foreach($time as $key=>$value){
      $insert = $activity::insert(array('id_paket'=>$request->nomorid, 'tanggal'=>$tanggal[$i], 'time'=>$value, 'event'=>$event[$i]));
      $i++;
    }

    dd('submit');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function showAll()
  {
    $data['query'] = DB::table('adventures')->get();
    return view('admin.product',$data);
  }

  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

}
