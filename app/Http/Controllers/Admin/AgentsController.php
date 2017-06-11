<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\VerifyCsrfToken;

use App\User;
use App\Models\Agent;
use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use File;


class AgentsController extends BaseController {

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('admin');
  }

  public function showAll()
  {
    // $user_id = DB::table('users')->where('level', 2)->pluck('id');
    $agents = DB::table('agents')->leftJoin('users', 'agents.user_id', '=', 'users.id')->where('level', 2)->get();
    //hasilnya ID user
    // $agents = DB::table('users')->leftJoin('agents', 'users.id','=','agents.user_id')->where('level', 2)->get();
    //hasilnya primary ID agent
    // dd($agents);
    return view('admin.agents',[
      'agents'=>$agents,
    ]);
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

  public function storeByAdmin(Request $request)
  {
    // $this->validate($request, [
  // 'nama' => 'required',
    // 'username' => 'required|unique',
  // 'email' => 'required|email|max:35|unique:pengguna',
  // 'password' => 'required|min:3|confirmed',
  // 'fotodiri' => 'mimes:jpeg,jpg,png|max:4000',
  // ]);

    $user = new User;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->stat = 1;
    $user->level = 2;
    $user->ver_token = str_random(20);
    $user->save();

    if($user->level == 2){
      $agent = new Agent;
      $agent->user_id = $user->id;
      $agent->fullname = $request->fullname;
      $agent->address = $request->address;
      $agent->city = $request->city;
      $agent->province = $request->province;
      $agent->gender = $request->gender;
      $agent->bahasa = $request->bahasa;
      $agent->tanggallahir = $request->tanggallahir;

      //simpan gambar DIRI
      $fileDIRI = $request->username. '_diri.png';
      $request->file('fotodiri')->storeAs("public\diri",$fileDIRI);
      $agent->foto = $fileDIRI;

      //simpan gambar KTP
      $fileKTP = $request->username. '_KTP.png';
      $request->file('fotoktp')->storeAs("public\KTP",$fileKTP);
      $agent->multidokumen = $fileKTP;

      $agent->save();
    }
    return redirect ('/dash/agents');
  }

  public function editByAdmin($id)
  {
    // mengambil data user
    $user = User::find($id);

    //mengambil data agent
    $user_id = $user->id;
    $agent = Agent :: where('user_id', $user_id)->first();

    return view ('admin.editagent',['agent' => $agent, 'user' => $user]);
  }

  public function updateByAdmin(Request $request, $id)
  {
    // dd($request);
    // mengambil data user
    $user = User::find($id);
    $user->username = $request->username;
    $user->email = $request->email;

    $user_id = $user->id;
    $agent = Agent :: where('user_id', $user_id)->first();
    // dd($request, $agent);
    $agent->fullname = $request->fullname;
    $agent->address = $request->alamat;
    $agent->city = $request->kota;
    $agent->province = $request->provinsi;
    $agent->bahasa = $request->bahasa;
    $agent->tanggallahir = $request->tanggallahir;
    // dd($agent);
    $user->save();
    $agent->save();
    // }

    return redirect ('dash/agents');
  }

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
    $agents = new Agent();
    $agents->username = $request->username;
    $agents->password = sha1($request->password);
    $agents->save();

    return redirect('/createagent/'.$agents->id);
  }

  public function create($id)
  {
    $agents = new Agent();
    $data['id'] = $id;
    $data['query'] = $agents::where('id', $id)->get();
    return view('agents_create', $data);
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


  public function show($id)
  {
    if(isset($id)) {
        $request =Agent::find($id);
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

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
   if(isset($id)) {
      $record =Agent::find($id);
      if($record) {
          $data=Agent::find($id)->delete();
          if ($data) {
            echo "success";
          }else{
            echo "failed";
          }
      }
    }
  }

}
