<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Tambah
// use App\Http\Request;

class LengkapiDataController extends Controller
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
        // dd($id);
          $customer = User::find($id);

          if(!$customer){
            abort(404);
          }
          return view('lengkapidata', ['customer' => $customer]);
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
        //Simpan Data
        $this->validate($request, [
            'firstname'  => 'required|alpha',
            'lastname'   => 'required|alpha',
            'alamat'     => 'required',
            'phone'      => 'required|between:10,12',
            'gender'     => 'required',
        ]);
        $customer = User::find($id);
        $customer->firstname = $request->firstname;
        $customer->lastname  = $request->lastname;
        $customer->alamat    = $request->alamat;
        $customer->phone     = $request->phone;
        $customer->gender    = $request->gender;
        $customer->save();
        return redirect ('/');
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
