<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    //
    public function index(){
        return view('admin.users.register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required',
            'password'=>'required|min:6',
            'terms'=>'required'
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('login');
    }
    public function create(array $data)
    {
      return User::create([
        'name'=>$data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
      ]);
    }
}
