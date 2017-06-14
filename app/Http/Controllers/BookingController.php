<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Tambahan
use App\User;
use App\Models\Paket;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Customer;
use App\Models\Inf_lokasi;
use Session;
//event
use App\Events\BookingCreated;

class BookingController extends Controller
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
    public function create($id,$query2)
    {
      $paket_id=$id;
      $pakets = Paket::where('id','=',$paket_id)->get();
      foreach ($pakets as $key => $value) {
          $schedule = Schedule::where('id','=',$value->schedule_id)->get();
      }
       $user = User::find($query2);
      return view('bookingform',['id'=>$id,'pakets'=>$pakets,'user'=>$user,'schedule'=>$schedule]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idpaket, $iduser)
    {
      // dd($request);
      $booking = new Booking();
      $booking->paket_id = $idpaket;

      $customer_id = Customer::where('user_id', $iduser)->first()->id;
      // dd($customer_id);
      $booking->customer_id = $customer_id;

      $schedule_id = Paket::find($idpaket)->schedule_id;
      $booking->schedule_id = $schedule_id;

      $booking->participants = $request->participants;
      $booking->kode_booking = str_random(20);

      $booking->payment_stat = 0;

      $booking->save();

      //kirim mail
      $user = User::find($iduser);
      $user_email = $user->email;
      // $username = $username;

      $paket_id = $booking->paket_id;
      $id_lokasi = Paket::find($paket_id)->id_lokasi;
      $lokasi = Inf_lokasi::where('lokasi_ID', $id_lokasi)->first();
      // dd($lokasi);
      $schedule_id = $booking->schedule_id;
      $schedule = Schedule::find($schedule_id);
      // dd($booking, $user_email);
      event(new BookingCreated($booking, $user, $lokasi, $schedule));
      $request->session()->flash('status', 'Rincian Paket Perjalanan Telah Dikirim ke Email Anda');
      return redirect('/');
      // Mail::to($user_email)->send(new userOrder($user, $booking));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$query2)
    {
        // $paket_id=$id;
        // $pakets = Paket::where('id','=',$paket_id)->get();
        // foreach ($pakets as $key => $value) {
        //     $schedule = Schedule::where('id','=',$value->schedule_id)->get();
        // }
        //
        //  $user = User::find($query2);
        // return view('bookingform',['id'=>$id,'pakets'=>$pakets,'user'=>$user,'schedule'=>$schedule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request,id $id, query2 $query2) {
        // $email = $_POST['email'];
        // Mail::send('register',['paket'=>$paket])function($m) use ($email){
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // }

        dd($request, $id, $query2);

        $user = User::findOrFail($id);

        // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        // //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // $this->validate($request, [
        //     'username' => 'required|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone' => 'required|between:10,12',
        //     'alamat' => 'required|max:80']);

        $data = array(
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'maxpeople' => $request->maxpeople,
            'alamat' => $request->alamat
            );
        // Mail::send('email.order', $data, function($message){
        //     $message->to($data->['email']);
        // });
        // dd($user, $data);
        Mail::to($request->email)->send(new userOrder($user, $data));
// dd("s");
        // Session::flash('success','Travel Package Details have been Sent to Your Email');

        return redirect('/');
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
}
