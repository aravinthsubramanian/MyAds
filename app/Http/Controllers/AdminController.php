<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 2; // Default is 1
    public function login()
    {
        return view('admin.login');
    }

    // protected function throttleKey(Request $request)
    // {
    //     return Str::lower($request->input('email')) . '|' . $request->ip();
    // }
    public function authentication(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = ['email' => $email, 'password' => $password];
        // if (Auth::attempt($credentials)) {
        //     if (isset($request->rememberme) && !empty($request->rememberme)) {
        //         setcookie('email', $email, time() + 3600);
        //         setcookie('password', $password, time() + 3600);
        //         setcookie('rememberme', 'on', time() + 3600);
        //     } else {
        //         setcookie('email', '', time() + 3600);
        //         setcookie('password', '', time() + 3600);
        //         setcookie('rememberme', '', time() + 3600);
        //     }
        //     $request->session()->regenerate();
        //     return redirect(route('admin.index'))->with('success', 'Login successfully...');
        // }
        // return back()->with('error', 'Invalid Username or Password...');

        // if (RateLimiter::tooManyAttempts($this->throttleKey($request), 3)) {
        //     // Handle lockout scenario
        //     $seconds = RateLimiter::availableIn($this->throttleKey($request));
        //     return redirect('/admin/login')->withErrors(['message' => "Too many login attempts. Please try again in $seconds seconds"]);
        // }

        try {
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
                return redirect(route('admin.index'))->with('success', 'Login successfully...');
            }
            // else {
            //     RateLimiter::hit($this->throttleKey($request));
            //     // Handle invalid credentials
            //     return redirect('/admin/login')->withErrors(['message' => 'Invalid email or password']);
            // }
        } catch (ValidationException $e) {
            return redirect(route('admin.login'))->withErrors([$e->getMessage()]);
        }
        // return redirect('/admin/login')->withErrors(['message' => 'Invalid email or password']);
        return redirect('/admin/login')->with('error', 'Invalid email or password...');
    }

    public function index()
    {
        return view('welcome');
    }

    public function profile()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        return view('admin.profile', compact('user'));
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
            return redirect(route('admin.profile'))->with('success', 'Password changed successfully!');
        }
        return redirect(route('admin.profile'))->with('error', 'Invalid Current password!');
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
        return redirect(route('admin.profile'))->with('success', 'Profile updated successfully!');
    }

    public function update_profile_image(Request $request)
    {
        $folderPath = public_path('upload/'); //create folder upload public/upload

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath . $imageName;

        file_put_contents($imageFullPath, $image_base64);

        $saveFile = new Image;
        $saveFile->title = $imageName;
        $saveFile->save();

        return response()->json(['success' => 'Crop Image Saved/Uploaded Successfully']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to(route('admin.login'))->with('success', 'logout successfully!');
    }
}
