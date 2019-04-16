<?php

namespace App\Http\Controllers\Auth\usercontrol;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/uxclub';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function showLoginForm()
    {
        return view('auth.admin.login');
    }

  /* admin login*/

    public function login(Request $request)
    {

        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended(route('contact'));
        }else {
                session()->flash('sticky_error', 'invalid login');
                return back();
        }
    } 

/*admin logout*/
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

       return view('frontend.pages.index');

    }             
}
