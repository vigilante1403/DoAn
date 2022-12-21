<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FeedBackController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'text'=>'required'
        ]);
        $input=$request->all();
        $input['id_user']= Auth::user()->id;
        
        $input['username']= DB::table('users')->where('id',$input['id_user'])->value('email');

        FeedBack::create($input);
        return back();
    }
}
