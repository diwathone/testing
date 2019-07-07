<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ManagerLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo; 

     public function __construct()
    {
        $this->redirectTo = '/' . config("backend.manager_link");
        $this->middleware('guest:manager')->except('logout');
    }
    public function showManagerLoginForm()
    {
        return view('auth.login', ['url' => 'manager']);
    }

    public function logout() {
        Auth::logout();
    }

    public function managerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email|unique:users|unique:admins',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('manager')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended($redirectTo);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}