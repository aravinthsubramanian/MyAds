<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function authentication(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        
        $credentials = ['email' => $email, 'password' => $password];
        if (Auth::attempt($credentials)) {
            if (isset($request->rememberme) && !empty($request->rememberme) ) {
                setcookie('email', $email, time() + 3600);
                setcookie('password', $password, time() + 3600);
                setcookie('rememberme', 'on', time() + 3600);
            }else{
                setcookie('email', '', time() + 3600);
                setcookie('password', '', time() + 3600);
                setcookie('rememberme', '', time() + 3600);
            }
            $request->session()->regenerate();
            return view('welcome')->with('success', 'Login successfully...');
        }
        return back()->with('error', 'Invalid Username or Password...');
    }

    public function index(){
        return view('welcome');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to(route('admins.login'))->with('success', 'logout successfully!');
    }
}
