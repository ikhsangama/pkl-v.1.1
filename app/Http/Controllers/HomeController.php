<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Tambah
// use App/User;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct($id)
    // {
    //     $this->middleware('auth');
    //     $customer = user::find ($id);
    //     if (empty(alamat)) {
    //         return redirect ('/{$id}/userdetail');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userdetail');
    }
}
