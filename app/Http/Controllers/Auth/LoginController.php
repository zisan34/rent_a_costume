<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\User;
use Illuminate\Support\Facades\Hash;

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

    
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login',$this->data);
    }
    public function login(Request $request){
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        $user=User::where('email',$request->email)->first();
        if($user){
            if($user->is_super_admin==1){
                if (Hash::check( $request->password, $user->password)) {
                    Auth::login($user);
                    return redirect('admin/adminDashboard');
                }
              
            }else{
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return redirect()->back();
                }
               
            }
        }
        return redirect()->back()->withInput();
    }
}
