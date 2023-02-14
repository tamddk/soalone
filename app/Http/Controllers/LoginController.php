<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
*/

class LoginController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            return redirect('user/dashboard');
        } else {
            return view('login');
        }
    }

    public function dologin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('user/dashboard');
        } else {
            return redirect('user/login');
        }
    }
}
