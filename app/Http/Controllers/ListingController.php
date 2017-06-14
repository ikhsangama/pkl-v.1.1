<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Paket;
use App\User;

class ListingController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function detail(Request $request, $id)
    {
        $paket_id=$id;
        $pakets = Paket::where('id','=',$paket_id)->get();
        // dd($pakets);
        if(!Auth::user()){
          $query2 = "NULL";
          // dd($pakets, $query2);
          // return redirect('/login')->with('warning', 'Silahkan login terlebih dahulu');
          $request->session()->flash('warningdetail', 'Silahkan login terlebih dahulu untuk memesan paket');
          return view('/detail',['id'=>$id, 'pakets'=>$pakets,'query2'=>$query2]);
        }
        $query2 = Auth::user()->id;
        // dd($id,$pakets,$query2);
        return view('customer.detail',['id'=>$id, 'pakets'=>$pakets,'query2'=>$query2]);
    }
}
