<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal_Program;

class ProgramController extends Controller
{
    //
    public function add(){
        return view('admin.program.add');
    }

    public function post_add(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'required',
            'program_name' =>'required'
    ]);

    $files = [];
    if($request->hasfile('filenames'))
    {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('program'), $name);  
            $files[] = $name;  
        }
    }
    $data=$request->all();
    $file= new Animal_Program();
    $file->filenames = $files;
    $file->program_name=$request->program_name;
    $file->save();

    return redirect()->route('program-show');
    }

    public function show(){
        $programs=Animal_Program::all();
        return view('admin.program.show',compact('programs'));
        
        // return dd($img_to_present);
    }
}
