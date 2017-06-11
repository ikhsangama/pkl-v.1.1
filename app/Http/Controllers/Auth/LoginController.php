<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Tambahan
use App\Models\Customer;
use App\Models\Agent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

        /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            //Menguji Status, 0 atau 1
            if (Auth::user()->stat==0){
              if (Auth::user()->level==1){
                Auth::logout();
                return redirect('/login')->with('warning','Akun Belum Aktif, Lakukan Verifikasi Email');
                }
            }
            if (Auth::user()->stat==0){
                if (Auth::user()->level==2){
                Auth::logout();
                return redirect('/login')->with('warning','Akun Belum Aktif, Tunggu Verifikasi Admin');
                }
            }
            $user_id = Auth::user()->id;
            //Menguji Level dan Gender, tanda sudah melengkapi atau belum
            if (Auth::user()->level==1){
              $customer = Customer::where('user_id', $user_id)->first();
              // dd($user_id,$customer);
              if($customer->gender==NULL){
                $this->sendLoginResponse($request);
                return redirect(Auth::user()->id . "/customer/completing");
              }
            }
            if (Auth::user()->level==2){
              $agent = Agent::where('user_id', $user_id)->first();
                            // dd($user_id,Agent::find(1));
              if($agent->gender==NULL){
                $this->sendLoginResponse($request);
                return redirect(Auth::user()->id . "/agent/completing");
              }
            }
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
