<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal_Encounter;

class EncounterController extends Controller
{
    //
    public function add(){
        return view('admin.encounter.add');
    }

    public function post_add(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'required',
            'animal_name' =>'required',
            'price' => 'required'
    ]);

    $files = [];
    if($request->hasfile('filenames'))
    {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('encounter'), $name);  
            $files[] = $name;  
        }
    }
    $data=$request->all();
    $file= new Animal_Encounter();
    $file->filenames = $files;
    $file->animal_name=$request->animal_name;
    $file->price=$request->price;
    $file->save();

    return redirect()->route('encounter-show');
    }

    public function show(){
        $encounters=Animal_Encounter::all();
        return view('admin.encounter.show',compact('encounters'));
        
        // return dd($img_to_present);
    }
}
