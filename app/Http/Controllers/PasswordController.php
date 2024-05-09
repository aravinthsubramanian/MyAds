<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function forgot_password(): view{
        return view('admin.forgot_password');
    }

    public function get_link(Request $request) {
        $request->validate([
            'email' => 'required|email:rfc,dns|exists:users,email',
        ]);
        $results = DB::table('password_reset_tokens')->where('email', $request->input('email'))->first();
        if (!empty($results)) {
            $time_difference = number_format(floatval(date('i', strtotime(Carbon::now()->toDateTimeString()) - strtotime($results->created_at))));
            if ($time_difference < 5)
                return back()->with("error", "So many attempts try again later...");
        }
        DB::table('password_reset_tokens')->where([['email', $request->input('email')]])->delete();
        $token = Str::random(64);
        Mail::send("email.forgot_mail", ['token' => $token, 'email' => $request->input('email')], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject("Reset password");
        });
        DB::table('password_reset_tokens')->insert(['email' => $request->input('email'), 'token' => $token, 'created_at' => Carbon::now()]);
        return back()->with("success", "Email send successfully");
    }

    public function reset_link(Request $request, $token) {
        $email = $request->input('email');
        return view('admin.reset_password', compact('token', 'email'));
    }

    public function reset_password(Request $request) {
        $request->validate([
            'email' => 'required|email:rfc,dns|exists:users,email',
            'newpassword' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirmpassword' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:newpassword'],
        ]);
        
        $updatepassword = DB::table('password_reset_tokens')->where([['email', $request->input('email')], ['token', $request->input('token')]])->first();
        if (!$updatepassword) {
            return back()->with("error", "Link expired request new link....");
        }

        User::where('email', $request->input('email'))->update(["password" => Hash::make($request->input('newpassword'))]);
        DB::table('password_reset_tokens')->where([['email', $request->input('email')]])->delete();
        return redirect()->to(route('admins.login'))->with("success", "Password reset successfully....");
    }
}
