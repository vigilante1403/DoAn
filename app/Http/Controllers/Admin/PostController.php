<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        return view('admin.posts.create');
    }

    protected function storeImage(Request $request) {
        // $file = $request->upload;
        // $extension = $file->getClientOriginalExtension();
        $image = $request->file('photo');
        $imagename = time().'-'.$image->getClientOriginalName();
        $imagepath = $image->move('images_post',$imagename);
        
        return $imagepath;
        // $path = $request->file('photo')->store('public/posts_picture');
        // return substr($path, strlen('public/'));
      }

      protected function create(array $data)
      {
          return Post::create([
              'title' => $data['title'],
              'keyword' => $data['keyword'],
              'body' => $data['body'],
              'img' => $data['photo']
          ]);
      }

    protected function storePost(Request $request)
{
    
    $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'keyword' => ['required', 'string', 'max:255'],
        'body' => ['required', 'string', 'min:8'],
        'photo' => ['required', 'image']
    ]);

   
    $imageUrl = $this->storeImage($request);
    
    $data = $request->all();
    $data['photo'] = $imageUrl;
    $user = $this->create($data);

    return redirect()->route('showing_posts')->with('title_header','Bai Viet');


}

    public function show(){
        $posts=Post::all();
        return view('admin.posts.show',compact('posts'));
    }

    public function chitiet($id){
        $post=Post::find($id);
        return view('admin.posts.detail',compact('post'));
    }

    public function delete($id){
        $post=Post::find($id);
        $post->delete();
        return back();
    }
    

}
