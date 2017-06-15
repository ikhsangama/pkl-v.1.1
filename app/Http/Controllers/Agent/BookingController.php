<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\VerifyCsrfToken;

use App\Models\Customer;

use App\Http\Requests;
use Storage;
use File;

class BookingController extends BaseController {

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('agent');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('agent.bookingagent');
  }

  

}
