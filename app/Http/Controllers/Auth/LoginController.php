<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller{

    public function showLoginForm(){
        return view('sgi.login');
    }
 
    /*
        public function __construct(){
            $this->middleware('guest' , ['only' => 'showLoginForm'] );
        }

        public function showLoginForm(){
            return view('sgi.login');
        }

        public function login(Request $request){
            
            $request->validate([
                'email'=> 'required|email',
                'document' => 'required|numeric',
                'pass' => 'required',
            ]);

            $query = ([
                'user_email' => $request['email'],
                'user_document' => $request['document'],
                'password' => $request['pass']
            ]);
            
            if(Auth::attempt($query)){
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }

            return back()
                ->withErrors( ['email' => 'Malas credenciales'])
                ->withInput(request(['email']));
            
        }
    */

    /*
    use AuthenticatesUsers;
    protected $redirectTo = '/SGI/Dashboard';

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('sgi.login');
    }

    public function login(Request $request){
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    protected function attemptLogin(Request $request){
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request){
        return ([
            'user_email' => $request['email'],
            'user_document' => $request['document'],
            'password' => $request['pass']
        ]);
    }

    protected function validateLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'document' => 'required|numeric',
            'pass' => 'required',
        ]);
    }
    */

}
