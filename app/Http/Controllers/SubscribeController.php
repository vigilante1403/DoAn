<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SubscribeLetter;
use App\Models\Subscribe;
use Illuminate\Support\Str;

class SubscribeController extends Controller
{
    //
    public function sendMail(Request $request)
    {   $request->validate([
        'email'=>'required'
    ]);
        $data=$request->all();
        $user = Subscribe::create([
            'email' =>$data['email'],
            'token' =>Str::random(60)
        ]);
        $user_new=Subscribe::where('email', $request->email)->firstOrFail();
        $subscribeLetter = Subscribe::updateOrCreate([
            'email' => $user_new,
        ], [
            'token' => Str::random(60),
        ]);
            if($subscribeLetter){
                $user_new->notify(new SubscribeLetter($subscribeLetter->token));
            }
        return response()->json([
            'message' => 'We have e-mailed you subscribed letter'
            ]);
        }
}
