<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Middleware\VerifyCsrfToken;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\Schedule;
use App\Models\Activity;

use Storage;
use File;
use DB;
use App\Models\Adventures;
use App\Models\Inf_lokasi;

class ProductController extends BaseController {

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('agent');
  }

  public function showAll()
  {
    //jenis adv
    $data['query'] = DB::table('adventures')->get();

    //query tampil product
    return view('agent.productagent', $data);
  }

  public function create()
  {
    //jenis adv
    $data['query1'] = DB::table('adventures')->get();

    //id agent
    //$data['query2'] = DB::table('agents')->get();

    //provinsi
    $data['query3'] = DB::table('inf_lokasi')->where('lokasi_kabupatenkota', '00')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_nama')->get();

    //kota
    $data['query4'] = DB::table('inf_lokasi')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_propinsi')->get();
    return view('agent.createproduct',$data);
  }

}
