<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = ['email' => $email, 'password' => $password];
        if (Auth::attempt($credentials)) {
            if (isset($request->rememberme) && !empty($request->rememberme)) {
                setcookie('email', $email, time() + 3600);
                setcookie('password', $password, time() + 3600);
                setcookie('rememberme', 'on', time() + 3600);
            } else {
                setcookie('email', '', time() + 3600);
                setcookie('password', '', time() + 3600);
                setcookie('rememberme', '', time() + 3600);
            }
            $request->session()->regenerate();
            return redirect(route('admins.index'))->with('success', 'Login successfully...');
        }
        return back()->with('error', 'Invalid Username or Password...');
    }

    public function index()
    {
        return view('welcome');
    }

    public function profile()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        return view('admin.profile',compact('user'));
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'newpassword' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirmpassword' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:newpassword'],
        ]);

        $user = Auth::user();
        $credentials = ['email' => $user->email, 'password' => $request->password];
        if (Auth::validate($credentials)) {
            $user = User::find($user->id);
            $user->password = Hash::make($request->newpassword);
            $user->update();
            return redirect(route('admins.profile'))->with('success', 'Password changed successfully!');
        }
        return redirect(route('admins.profile'))->with('error', 'Invalid Current password!');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:32|regex:/^[a-zA-Z .]+$/',
            'mobile' => 'required|digits:10',
        ]);

        $user = Auth::user();
        $user = User::find($user->id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->update();
        return redirect(route('admins.profile'))->with('success', 'Profile updated successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to(route('admins.login'))->with('success', 'logout successfully!');
    }
}
