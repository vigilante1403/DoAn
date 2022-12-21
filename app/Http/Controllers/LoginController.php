<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FeedBack;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\ViewCount;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function homepage(ViewCount $viewcount){
        if(Cookie::get($viewcount->reads)!=''){
            Cookie::queue('$postcount->id', '1', 60);
            $viewcount->incrementReadCount();
            $totalViews=ViewCount::all()->count();
            $feedbacks=FeedBack::all();
        }
        return view('test',compact('totalViews','feedbacks'));
    }
    public function index()
    {
        return view('admin.users.login', [
            'title_header' => 'Login'
        ]);
    }
    public function store(Request $request)
    {


        $this->validate($request, [

            'email' => 'required|email:filter',
            'password' => 'required'

        ]);

        if (Auth::attempt([

            'email' => $request->input('email'),

            'password' => $request->input('password'),

        ], $request->input('remember'))) {


            session(['login'=>'logged']);
            if(Auth::check()){

            $id=Auth::user()->id;
            $user=User::find($id);
            $name=$user->name;
            // $name=DB::table('users')->select('name')->where('id')->get();
            // $name=json_decode($name,true);
            // return dd($name);
            session(['id'=>$id]);
            if(Auth::user()->blocked_at!=null){
                $user=auth()->user();
                auth()->logout();
                session(['error'=>'Your account was blocked at ' . $user->blocked_at]);
                return redirect()->route('login');
            }
            return redirect()->route('test');
            }
        } 
        else {
            
            Session::flash('error', 'Email hoac Password khong dung!');
            return redirect()->back();
            // return dd($request->input());
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('test');
    
        
    }
}
