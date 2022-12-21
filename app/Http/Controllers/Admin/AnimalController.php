<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Animal_Description;

class AnimalController extends Controller
{
    //
    public function add(){
        return view('admin.animal.add-name');
    }
    public function post_add(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        

        $image = $request->file('photo');
        $imagename = time().'-'.$image->getClientOriginalName();
        $imagepath = $image->move('adopt-animal',$imagename);
        $save = new Animal;
        $save->name = $request->name;
        $save->price = $request->price;
        $save->img_path = $imagepath;
        $save->save();
        return redirect()->route('adopt-animal-view');
    }

    public function addInfo($id){
        $animal=Animal::find($id);
        return view('admin.animal.add-description',compact('animal'));
    }
    public function create(array $data){
        return Animal_Description::create([
            'name_animal'=>$data['name_animal'],
            'beard_colors'=>$data['beard_colors'],
            'weight'=>$data['weight'],
            'personality_traits'=>$data['personality_traits'],
            'fact'=>$data['fact'],
            'favorite_items'=>$data['favorite_items'],
            'related_to'=>$data['related_to'],
        ]);
    }
    public function post_addInfo(Request $request){
        $request->validate([
            'beard_colors'=>'required',
            'weight'=>'required',
            'personality_traits'=>'required',
            'fact'=>'required',
            'favorite_items'=>'required',
            'related_to'=>'required',
        ]);
        $data = $request->all();
        // return dd($data);
        $anima_desc=$this->create($data);
        // return response()->json([
        //     "message"=>"Thong tin duoc upload thanh cong"
        // ]);

        return redirect()->route('adopt-animal-view');
    }

    public function show(){
        $animals=Animal::all();
        return view('admin.animal.show',compact('animals'));
    }
    
}
