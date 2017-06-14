<?php

namespace App\Http\Controllers\Admin;

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

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin');
  }
  
  public function showAll()
  {
    $data['query'] = DB::table('adventures')->get();
    return view('admin.product',$data);
  }

  public function createByAdmin()
  {
    //jenis adv
    $data['query'] = DB::table('adventures')->get();

    //id agent
    $data['query1'] = DB::table('agents')->get();

    //provinsi
    $data['query3'] = DB::table('inf_lokasi')->where('lokasi_kabupatenkota', '00')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_nama')->get();

    //kota
    $data['query4'] = DB::table('inf_lokasi')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_propinsi')->get();
    return view('admin.createproduct',$data);
  }

  public function storeByAdmin(Request $request)
  {
    $paket = new Paket;
    $paket->agents_id = $request->idagent;
    $paket->judul = $request->title;
    $paket->description = $request->description;
    $paket->price = $request->price;
    $paket->adv_id = $request->id_adv;
    $paket->id_lokasi = $request->lokasi_ID;
    $paket->schedule_id = $request->price;
    $paket->detail = $request->price;    

    //simpan gambar
    $filePaket = $request->username. '_diri.png';
    $request->file('product')->storeAs("public\product",$filePaket);
    $paket->product = $filePaket;
    $paket->save();

    $schedule = new schedule();
    $schedule->id_paket = $paket->id;
    $schedule->start_date = $request->start_date;
    $schedule->end_date = $request->end_date;
    // $schedule->paket_id = $request->nomorid;
    $schedule->start_point = $request->pickuppoint;
    $schedule->end_point = $request->endpoint;
    $schedule->maxpeople = $request->peserta;
    $schedule->save();

    $activity = new activity();
    $activity->id_paket = $paket->id;
    $activity->event = $request->kegiatan;
    $activity->save();
  
    return redirect ('/dash/products');
    }


////BATAS

  public function index()
  {
   return view('product_detail');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  

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
