<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //
    public function index(){
        return view('admin.gallery.add');
    }

    public function upload(Request $request)
    {
        
        $validatedData = $request->validate([
         'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
         'species'=>'required',
         'type'=>'required'
        ]);
        
        // $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->store('uploads');
        $image = $request->file('photo');
        $imagename = time().'-'.$image->getClientOriginalName();
        $imagepath = $image->move('gallery',$imagename);
        $save = new Gallery;
        $save->species = $request->species;
        $save->type = $request->type;
        $save->img = $imagepath;
        $save->save();
        return redirect('admin/gallery/show')->with('status', 'Image Has been uploaded successfully with validation in laravel');
    }

    public function show(){
        $pictures=Gallery::all();
        return view('admin.gallery.show',compact('pictures'));
    }
    public function delete($id){
        $picture=Gallery::find($id);
        $picture->delete();
        return back();
    }
}
