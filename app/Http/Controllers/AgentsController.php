<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesResources;
// use Illuminate\Support\Facades\DB;
// use App\Http\Middleware\VerifyCsrfToken;

use App\Models\Agents;
use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use File;

class AgentsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('agent_register');
  }

  public function register(Request $request)
  {
    $agents = new Agents();
    $agents->username = $request->username;
    $agents->password = sha1($request->password);
    $agents->save();

    return redirect('/createagent/'.$agents->id);
  }

  public function create($id)
  {
    $agents = new Agents();
    $data['id'] = $id;
    $data['query'] = $agents::where('id', $id)->get();
    return view('agents_create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function createByAdmin()
  {
    return view('admin.createAgent');

  }


  public function store($id, Request $request)
  {
    $agents = new Agents();
    $data = array(
        'fullname'=>$request->fullname,
        'email'=>$request->email,
        'address'=>$request->alamat,
        'province'=>$request->provinsi,
        'city'=>$request->kabupaten,
        'gender'=>$request->gender,
        'tanggallahir'=>$request->tanggallahir,
        'bahasa'=>$request->bahasa,
        'foto'=>$request->fotodiri,
        'multidokumen'=>$request->fotoktp
      );
    // $file=$request->file('fotodiri');
    // $filename=$request->username.".png";
    // $request->file('fotodiri')->storeAs('public/FotoDiri',
    $update = $agents::where('id', $id)->update($data);
    dd('submit');
  }

  public function storeByAdmin(Request $request)
  {
    $this->validate($request, [
  // 'nama' => 'required',
  // 'email' => 'required|email|max:35|unique:pengguna',
  // 'password' => 'required|min:3|confirmed',
  'fotodiri' => 'mimes:jpeg,jpg,png|max:4000',
  ]);

    $agent = new Agents;
    $agent->username = $request->username;
    $agent->email = $request->email;
    $agent->password = $request->password;
    $agent->fullname = $request->fullname;
    $agent->address = $request->address;
    $agent->city = $request->city;
    $agent->province = $request->province;
    $agent->gender = $request->gender;
    $agent->bahasa = $request->bahasa;
    $agent->tanggallahir = $request->tanggallahir;
    $agent->verif_stat = 1;

    //simpan gambar DIRI
    $fileDIRI = $request->username. '_diri.png';
    $request->file('fotoktp')->storeAs("public\diri",$fileDIRI);
    $agent->foto = $fileDIRI;

    //simpan gambar KTP
    $fileKTP = $request->username. '_KTP.png';
    $request->file('fotodiri')->storeAs("public\KTP",$fileKTP);
    $agent->multidokumen = $fileKTP;

    $agent->save();
    return redirect ('/agent');
  }

  public function showAll()
  {
    $data=Agents::all();
    return view('admin.agent')->with('data',$data);
  }

  public function show($id)
  {
    if(isset($id)) {
        $request =Agents::find($id);
        $data = array(
        'fullname'=>$request->fullname,
        'username'=>$request->username,
        'email'=>$request->email,
        'address'=>$request->address,
        'province'=>$request->province,
        'city'=>$request->city,
        'gender'=>$request->gender,
        'tanggallahir'=>$request->tanggallahir,
        'bahasa'=>$request->bahasa,
        'foto'=>$request->fotodiri,
        'multidokumen'=>$request->fotoktp,
      );
    exit(json_encode($data));
      }
  }

  public function edit($id, Request $request)
  {
    $agents = new Agents();
    $data = array(
        'fullname'=>$request->fullname,
        'username'=>$request->username,
        'email'=>$request->email,
        'address'=>$request->address,
        'province'=>$request->province,
        'city'=>$request->city,
        'tanggallahir'=>$request->tanggallahir,
        'bahasa'=>$request->bahasa
        /*'foto'=>$request->fotodiri,
        'multidokumen'=>$request->fotoktp*/
      );
    $update = $agents::where('id', $id)->update($data);
    echo "success";
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
   if(isset($id)) {
      $record =Agents::find($id);
      if($record) {
          $data=Agents::find($id)->delete();
          if ($data) {
            echo "success";
          }else{
            echo "failed";
          }
      }
    }
  }

}
