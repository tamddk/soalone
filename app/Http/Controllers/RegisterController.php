<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
/*

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
*/

class RegisterController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('user/dashboard');
        } else {
            return view('register');
        }
    }

    public function doregis(Request $request)
    {
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_key' => $request->_token,
            'role' => "STAF",
            'active' => 1
        ]);

        return redirect('user/login');
    }
}
