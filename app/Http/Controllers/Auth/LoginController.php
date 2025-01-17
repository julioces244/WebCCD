<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


     public function authenticate(Request $request)
   {
       $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
           // Authentication passed...
             return redirect()->intended('intranet');

       }else{
         return back()->with('failed_auth', 'Las credenciales ingresadas son incorrectas!');

       }
   }

   public function logout(){
     Auth::logout();
     return redirect("/inicio");
   }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
