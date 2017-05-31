<?php

namespace App\Http\Controllers\Customer;

use App\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditProfilController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('customer');
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
          $customer = User::find($id);

          if(!$customer){
            abort(404);
          }
          return view('editprofil', ['customer' => $customer]);
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
            'username'  => 'required|alpha_num',
            'email'     => 'required|max:50',
            'phone'     => 'required|between:10,12',
            'alamat'    => 'required|max:80',
        ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->email    = $request->email;

        if ($user->level == 1){
          $user_id = $user->id;
          $customer = Customer :: where('user_id', $user_id)->first();
          // dd($user, $customer);
          $customer->phone = $request->phone;
          $customer->alamat   = $request->alamat;
        }
        // $customer->phone    = $request->phone;
        // $customer->alamat   = $request->alamat;
        $user->save();
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
