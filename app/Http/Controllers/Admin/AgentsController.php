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
    //$agents = DB::table('users')->leftJoin('agents', 'users.id','=','agents.user_id')->where('level', 2)->get();
    //hasilnya primary ID agent
    return view('admin.agents',[
      'agents'=>$agents,
    ]);
  }

  public function createByAdmin()
  {
    //provinsi
    $data['query'] = DB::table('inf_lokasi')->where('lokasi_kabupatenkota', '00')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_nama')->get();

    //kota
    $data['query1'] = DB::table('inf_lokasi')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_propinsi')->get();
    return view('admin.createAgent',$data);
  }

  public function storeByAdmin(Request $request)
  {
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
    //provinsi
    $data['query3'] = DB::table('inf_lokasi')->where('lokasi_kabupatenkota', '00')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_nama')->get();

    //kota
    $data['query4'] = DB::table('inf_lokasi')->where('lokasi_kecamatan', '00')->where('lokasi_kelurahan', '0000')->orderby('lokasi_propinsi')->get();

    // mengambil data user
    $user = User::find($id);

    //mengambil data agent
    $user_id = $user->id;
    $agent = Agent::where('user_id', $user_id)->first();

    return view ('admin.editagent',['agent' => $agent, 'user' => $user], $data);
  }

  public function updateByAdmin(Request $request, $id)
  {
    // mengambil data user
    $user = User::find($id);
    $user->username = $request->username;
    $user->email = $request->email;

    $user_id = $user->id;
    $agent = Agent::where('user_id', $user_id)->first();
    $agent->fullname = $request->fullname;
    $agent->address = $request->alamat;
    $agent->city = $request->city;
    $agent->province = $request->province;
    $agent->bahasa = $request->bahasa;
    $agent->tanggallahir = $request->tanggallahir;
    $user->save();
    $agent->save();

    return redirect ('dash/agents');
  }

  public function approve($id)
  {

  $user = User::find($id);
  $user->stat=1;
  $user->save();
  return redirect('/dash/agents');
  }

  public function destroy($id)
  {
   $user = User::find($id);
   $user_id = $user->id;
   $agent = Agent::where('user_id', $user_id)->first();
   file::delete(public_path('storage/diri/'.$agent->foto));
   file::delete(public_path('storage/KTP/'.$agent->multidokumen));
   $agent->delete();
   return redirect('/dash/agents')->with('warning', 'User '.$user->username.' berhasil dihapus!');
  }
}
