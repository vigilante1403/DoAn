<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    //
    public function add(){
        return view('admin.promotion.add');
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
        $save = new Promotion;
        $save->name = $request->name;
        $save->price = $request->price;
        $save->img_path = $imagepath;
        $save->save();
        return redirect()->route('promotion-show');
    }

    public function show(){
        $promotions=Promotion::all();
        return view('admin.promotion.show',compact('promotions'));
    }
    
}
