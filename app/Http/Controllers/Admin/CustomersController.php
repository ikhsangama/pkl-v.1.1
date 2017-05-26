<?php

namespace App\Http\Controllers\Admin;

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

class CustomersController extends BaseController {

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
    return view('customer_register');
  }

  public function register(Request $request)
  {
    $customer = new Customer();
    $customer->username = $request->username;
    $customer->password = sha1($request->password);
    $customer->save();

    return redirect('/createcustomer/'.$customers->id);
  }

  public function create($id)
  {
    $customer = new Customer();
    $data['id'] = $id;
    $data['query'] = $customers::where('id', $id)->get();
    return view('customer_create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function createByAdmin()
  {
    return view('admin.createCustomer');
  }


  public function store($id, Request $request)
  {
    $customer = new Customer();
    $data = array(
        'email'=>$request->email,
        'firstname'=>$request->fname,
        'lastname'=>$request->lname,
        'alamat'=>$request->alamat,
        'phone'=>$request->phone,
        'gender'=>$request->gender,
        'tanggallahir'=>$request->tanggallahir,
        'nationality'=>$request->nationality,
        'foto'=>$request->foto
      );
    $update = $customers::where('id', $id)->update($data);
    dd('submit');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */

  public function addNew()
  {
    return view('customer_add');
  }

  public function add($id, Request $request)
  {
    $customers = new Customer();
    $data = array(
      'username' => $request->username,
      'password' => sha1($request->password),
      'email'=>$request->email,
      'firstname'=>$request->fname,
      'lastname'=>$request->lname,
      'alamat'=>$request->alamat,
      'phone'=>$request->phone,
      'gender'=>$request->gender,
      'tanggallahir'=>$request->tanggallahir,
      'nationality'=>$request->nationality,
      'foto'=>$request->foto
    );
    $customers->save();
    dd('submit');
  }

  public function showAll()
  {
    // $customers = Customer::all();
    $customers = DB::table('customers')->leftJoin('users', 'customers.user_id', '=', 'users.id')->where('level', 1)->get(); //hasilnya ID user
    return view('admin.customers')->with('data',$customers);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */

public function show($id)
  {
    if(isset($id)) {
        $request =Customer::find($id);
        $data = array(
        'username'=>$request->username,
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'alamat'=>$request->alamat,
        'phone'=>$request->phone,
        'gender'=>$request->gender,
        'tanggallahir'=>$request->tanggallahir,
        'nationality'=>$request->nationality,
        'foto'=>$request->foto,
      );
    exit(json_encode($data));
      }
  }

  public function edit($id, Request $request)
  {
    $customer = new Customer();
    $data = array(
        'username'=>$request->username,
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'alamat'=>$request->alamat,
        'phone'=>$request->phone,
        'gender'=>$request->gender,
        'nationality'=>$request->nationality,
        'tanggallahir'=>$request->tanggallahir,
        // 'foto'=>$request->foto,
      );
    $update = $customer::where('id', $id)->update($data);
    echo "success";
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    if(isset($id)) {
      $record =Customer::find($id);
      if($record) {
          $data=Customer::find($id)->delete();
          if ($data) {
            echo "success";
          }else{
          echo "failed";
        }
      }
    }
  }

}
