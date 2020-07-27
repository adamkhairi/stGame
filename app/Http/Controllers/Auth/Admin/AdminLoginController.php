<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('admin.auth.admin-login');
    }

    public function login(Request $request)
    {
        //Validate Login Form

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        //login Admin

        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ],
            $request->remember)) {
            //If success rdirect
            return redirect()->intended(route('admin.dashboard'));

        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
        //if not Success Go back to login page


    }
}
