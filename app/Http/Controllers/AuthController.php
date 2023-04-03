<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.login', [
            'title' => 'QQ Group | Login'
        ]);
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->with('message', '<div class="alert alert-danger alert-danger-login" role="alert">
                <small>Wrong password or email!</small>
                </div>');
    }

    public function changepassword()
    {
        return view('auth.changepassword', [
            'title' => 'QQ Group | Dashboard Change Password'
        ]);
    }
    public function updatepassword(Request $request, User $user)
    {
        $request->validate([
            'currentpassword' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password'
        ]);




        $password = $request->password;
        $cpassword = $request->currentpassword;

        if (!Hash::check($cpassword, $user->password)) {
            return redirect('/dashboard/changepassword')->with('message', '<div class="alert alert-light-danger color-danger"><i class="bi bi-check-circle"></i> Current password  not same ! </div>');
        } else {
            if ($cpassword == $password) {
                return redirect('/dashboard/changepassword')->with('message', '<div class="alert alert-light-danger color-danger"><i class="bi bi-check-circle"></i> Current password and new password not same !</div>');
            } else {
                $user->password = Hash::make($password);
                $user->save();

                return redirect('/dashboard/changepassword')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Your password has been updated !</div>');
            }
        }
    }

    public function forgotpassword()
    {
        return view('auth.forgotpassword', [
            'title' => 'QQ Group | Forgot Password'
        ]);
    }

    public function sendresetlink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $token = Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $action_link = route('resetpasswordform', [
            'token' => $token,
            'email' => $request->email
        ]);
        $body = "We have received a request to reset the password for <b>QQ Group</b> account associated with " . $request->email . ". You can reset your password by clicking the link below.";

        Mail::send('email-forgot', [
            'action_link' => $action_link,
            'body' => $body,
        ], function ($message) use ($request) {
            $message->from('fitraangguns@gmail.com', 'QQ Group');
            $message->to($request->email)
                ->subject('Reset Password');
        });

        return back()->with('message', '<div class="alert alert-success alert-success-login" role="alert">
        <small>We have e-mailed your password reset link</small>
        </div>');
    }
    public function showresetform(Request $request, $token = null)
    {
        return view('auth.resetpassword', [
            'title' => 'QQ Group | Reset Password'
        ])->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetpassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ]);

        $check_token = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$check_token) {
            return back()->withInput()->with('message', 'invalid token');
        } else {
            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_reset_tokens')->where([
                'email' => $request->email
            ])->delete();

            return redirect('/login')->with('message', '<div class="alert alert-success alert-success-login" role="alert">
        <small>Your password has been changed! You can login with new password</small>
        </div>')->with('verifiedEmail', $request->email);
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
