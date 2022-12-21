<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    public function index(){
        return view('admin.authorize.add_user');
    }
    public function add(Request $request){
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'authorize'=>'required',
        ]);

        $data=$request->all();
        // return dd($request->input());
        $check=$this->create($data);
        return redirect()->back()->withSuccess('Tao user thanh cong');

    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'authorize' => $data['authorize'],
          ]);
    }

    public function show(){
        $users=User::all();
        session(['error'=>null]);
        return view('admin.authorize.get_user_list',compact('users'));
    }

    public function block($id){
        $user=User::find($id);
        $user->blocked_at=Carbon::now();
        $user->save();
        return redirect()->back()->withSuccess('block user thanh cong');
    }

    public function unblock($id){
        $user=User::find($id);
        $user->blocked_at=null;
        $user->save();
        return redirect()->back()->withSuccess('Unblock user thanh cong');
    }

    public function edit($id){
        $user=User::find($id);
       
        return view('admin.authorize.edit_user',compact('user'));
        // return dd($data);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->authorize=$request->authorize;
        $user->save();
        return redirect()->route('show');
    }

    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->route('show');
    }
}
