<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Tambahan
use App\Models\Paket;
use App\Models\Schedule;
use App\User;
use Session;
//Mail
use App\Mail\userOrder;
use Illuminate\Support\Facades\Mail;

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
    public function show($id,$query2)
    {
        $paket_id=$id;
        $pakets = Paket::where('id','=',$paket_id)->get();
        foreach ($pakets as $key => $value) {
            $schedule = Schedule::where('id','=',$value->schedule_id)->get();
        }
      
         $customer = User::find($query2);      
        return view('bookingform',['id'=>$id,'pakets'=>$pakets,'customer'=>$customer,'schedule'=>$schedule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request) {
        // $email = $_POST['email'];
        // Mail::send('register',['paket'=>$paket])function($m) use ($email){
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // }
        
        dd($request);


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
        dd($user, $data);
        Mail::to($request->email)->send(new userOrder($user, $data));
// dd("s");
        Session::flash('success','Travel Package Details have been Sent to Your Email');

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
