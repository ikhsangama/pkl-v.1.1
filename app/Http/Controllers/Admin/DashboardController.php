<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Models\Customer;

class DashboardController extends BaseController {

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $data['countcustomer']= DB::table('customers')->count();
    $data['countagent']= DB::table('agents')->count();
    $data['countproduct']= DB::table('paket')->count();
    return view('admin.dashboard',$data);
  }

}
