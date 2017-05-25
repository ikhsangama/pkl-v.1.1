<?php

namespace App\Http\Controllers\Agent;

use App\User;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Tambah
// use App\Http\Request;

class LengkapiDataController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('agent');
  }
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
          $user = User::find($id);

          if(!$user){
            abort(404);
          }
          return view('agent.lengkapidata', ['user' => $user]);
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
      // dd($request, $id);
        //Simpan Data
        $this->validate($request, [
            'firstname'  => 'required|alpha',
            'lastname'   => 'required|alpha',
            'alamat'     => 'required',
            'phone'      => 'required|between:10,12',
            'gender'     => 'required',
        ]);

        $user_id = User::find($id)->id;
        $level = User::find($id)->level;
        // dd($customer = Customer::find($user_id));
        if($level==2)
        {
          $agent = Agent::where('user_id', $user_id)->first();
          // dd($customer, Customer::find(4));
          $agent->firstname = $request->firstname;
          $agent->lastname  = $request->lastname;
          $agent->alamat    = $request->alamat;
          $agent->phone     = $request->phone;
          $agent->gender    = $request->gender;
          $agent->save();
        }

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
