<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    //
    public function delete($id){
        //
        $comment=Comment::find($id);
        $comment->delete();
        return back();
    }

    public function store(Request $request){
        $request->validate([
            'body'=>'required'
        ]);
        $input=$request->all();
        $input['user_id']= Auth::user()->id;
        
        $input['username']= DB::table('users')->where('id',$input['user_id'])->value('email');

        Comment::create($input);
        return back();
    }
    
}
