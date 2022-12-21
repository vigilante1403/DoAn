<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
class ResetPasswordController extends Controller
{
    //
    public function showForgetPasswordForm()
    {
       return view('auth.forgetPassword');
    }

    
    public function sendMail(Request $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
            
        }
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
            ]);
        }
        
        public function showResetPasswordForm($token) { 
            return view('auth.forgetPasswordLink', ['token' => $token]);
         }
        public function reset(Request $request)
        {   
            $request->validate([
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
            ]);
            $passwordReset = PasswordReset::where('token',$request->token)->firstOrFail();
            if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
                $passwordReset->delete();
                return response()->json([
                    'message' => 'This password reset token is invalid.',
                ], 422);
            }
            $request->all();
            $userData = $request->only("password");
            $userData['password'] = Hash::make($userData['password']);
            $user = User::where('email',$passwordReset->email)->firstOrFail();
            $updatePasswordUser = $user->update($userData);
            $passwordReset->delete();
            return response()->json([
                'success' => $updatePasswordUser,
            ]);
        }
}
