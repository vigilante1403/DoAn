<?php


use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\AnimalController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\EncounterController;
use App\Http\Controllers\SubscribeController;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\FeedBack;
use App\Models\Animal;
use App\Models\Animal_Description;
use App\Models\Promotion;
use App\Models\Animal_Program;
use App\Models\Animal_Encounter;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//On Web
Route::get('/', [LoginController::class,'homepage'])->name('test');
Route::get('jenkinson/{token}',function(){
    return redirect('/');
});

Route::get('contact',function(){
    return view('contact');
});
Route::get('/viewgallery',function(){
    $pictures=Gallery::all();
    // $datas=[];
    // foreach($pictures as $picture){
    //     array_push($datas,$picture->img);
    // }
    // $datas=array_chunk($datas,2);
    // return view('gallery',compact('datas'));
    return view('Gallery-new',compact('pictures'));
    // $i=0;
    // return dd($datas[$i][0]);
})->name('gallery');
Route::get('/news',function(){
    $posts = Post::all();
    return view('news',compact('posts'));
});
Route::get('news/{id}',function($id){
    $post=Post::find($id);
    return view('detail-news',compact('post'));
});

//Galleria
Route::get('galleria',function(){
    return view('galleria');
});
Route::get('education',function(){
    return view('education');
});
Route::get('error',function(){
    return view('error');
});
Route::get('animal-art',function(){
    return view('AnimalArt');
});
Route::get('our-mission',function(){
    return view('OurMission');
});
Route::get('exhibits',function(){
    return view('Exhibits');
});
Route::get('experiences',function(){
    return view('Experiences');
});
Route::get('pages',function(){
    return view('pages');
});
Route::get('services',function(){
    return view('Service');
});
Route::get('explore',function(){
    $posts = Post::all();
    return view('Explore',compact('posts'));
});
Route::get('cam',function(){
    return view('penguincam');
});
Route::post('subscribe',[SubscribeController::class,'sendMail']);
Route::post('comments',[CommentsController::class,'store'])->name('comments.store')->middleware('auth');
Route::post('feedback',[FeedBackController::class,'store'])->name('feedbacks.store')->middleware('auth');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('store');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// Route::get('reset-password',[ResetPasswordController::class,'showForgetPasswordForm']);
Route::prefix('services')->group(function(){
    Route::get('adopt-an-animal',function(){
        $animals=Animal::all();
        return view('adopt-an-animal-new',compact('animals'));
    });
    Route::get('animal-encounters',function(){
        $encounters=Animal_Encounter::all();
        return view('animal-encounters-new',compact('encounters'));
    });
    Route::get('promotions',function(){
        $promotions=Promotion::all();
        return view('promotions-new',compact('promotions'));
    });
    Route::get('programs',function(){
        $programs=Animal_Program::all();
        return view('program-new',compact('programs'));
    });
    Route::get('feeding-schedule',function(){
        return view('feeding-schedule');
    });
    Route::get('proposals',function(){
        return view('Proposals');
    });
});

//Product
Route::prefix('product')->group(function(){
    Route::get('buy-5-get-1-free-{name}',function($name){
        if($name=='child-admissions'){
            $promotion=DB::table('promotions')->where('name','Child Admissions')->get();
            $related=DB::table('promotions')->where('name','Adult Admissions')->get();
        }
        else{
            $promotion=DB::table('promotions')->where('name','Adult Admissions')->get();
            $related=DB::table('promotions')->where('name','Child Admissions')->get();
        }
        $count_animal=count(Animal::all());
        $count_program=count(Animal_Program::all());

        $random=rand(1,$count_animal);
        $random_program=rand(1,$count_program);

        $animal=Animal::find($random);
        $program=Animal_Program::find($random_program);
        
        return view('product.buy-5-get-1-free',compact('promotion','animal','program','related'));
        // return dd($animal);
    });
    Route::get('{name}/{id}',function($name,$id){
            $animal=Animal::find($id);
            $animal_description=DB::table('animal-description')->where('name_animal',$animal->name)->get();
            $data=$animal_description;
            $count_animal=count(Animal::all());
            $related_datas=Animal::where('id','!=',$id)->inRandomOrder()->limit(4)->get();
        return view('product.animal-detail-info',compact('animal','data','related_datas'));
        // return dd($related_data);
    });

    Route::get('penguin-encounters',function(){
            $animals=Animal::inRandomOrder()->limit(4)->get();
            $encounter=Animal_Encounter::where('animal_name','Penguin')->get();
            return view('product.animal-encounter',compact('animals','encounter'));
            // return dd($encounter);
    });
    Route::get('sloth-encounters',function(){
        $animal=Animal::where('name','Wally The Sloth')->get();
        $encounter=Animal_Encounter::where('animal_name','Sloth')->get();
        $data_related=Animal_Encounter::where('animal_name','Penguin')->get();
        $program_related=Animal_Program::where('program_name','The Scoop on Sloths')->get();
        return view('product.animal-encounter',compact('animal','encounter','data_related','program_related'));
        // return dd($encounter);
});
});

//Reset Password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm']);
Route::post('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//Admin site
Route::prefix('admin')->middleware('active_user','auth')->group(function(){
    Route::get('home',function(){
        $title_header="Manage";
        return view('admin.home',compact('title_header'));
    });
    Route::prefix('user')->group(function(){
        Route::get('add',[UserController::class,'index']);
        Route::post('add',[UserController::class,'add']);
        Route::get('show',[UserController::class,'show'])->name('show');
        Route::get('block/{id}',[UserController::class,'block']);
        Route::get('unblock/{id}',[UserController::class,'unblock']);
        // Route::post('block?id={id}',[UserController::class,'block']);
        Route::get('edit/{id}',[UserController::class,'edit']);
        Route::post('edit/{id}',[UserController::class,'update'])->name('update');
        Route::get('delete/{id}',[UserController::class,'delete']);
    });
    Route::prefix('posts')->group(function(){
        Route::get('add',[PostController::class,'index'])->name('posts.add.showForm');
        Route::post('add',[PostController::class,'storePost'])->name('storing_post');
        Route::get('show',[PostController::class,'show'])->name('showing_posts');
        Route::get('delete/{id}',[PostController::class,'delete']);
        Route::get('show/detail/{id}',[PostController::class,'chitiet']);
        Route::get('show/detail/delete/{id}',[CommentsController::class,'delete'])->name('admin.comments.delete');
    });

    Route::prefix('gallery')->group(function(){
        Route::get('add',[GalleryController::class,'index'])->name('add_pic_form')->name('image');
        Route::post('add',[GalleryController::class,'upload']);
        Route::get('show',[GalleryController::class,'show'])->name('showing_pics');
        Route::get('delete/{id}',[GalleryController::class,'delete']);
    });

    Route::prefix('animal')->group(function(){
        Route::get('add',[AnimalController::class,'add']);
        Route::post('add',[AnimalController::class,'post_add']);
        Route::get('addInfo/{id}',[AnimalController::class,'addInfo']);
        Route::post('addInfo/{id}',[AnimalController::class,'post_addInfo']);
        Route::get('show',[AnimalController::class,'show'])->name('adopt-animal-view');
    });

    Route::prefix('promotion')->group(function(){
        Route::get('add',[PromotionController::class,'add']);
        Route::post('add',[PromotionController::class,'post_add']);
        Route::get('show',[PromotionController::class,'show'])->name('promotion-show');
    });
    Route::prefix('program')->group(function(){
        Route::get('add',[ProgramController::class,'add']);
        Route::post('add',[ProgramController::class,'post_add']);
        Route::get('show',[ProgramController::class,'show'])->name('program-show');
    });
    Route::prefix('encounter')->group(function(){
        Route::get('add',[EncounterController::class,'add']);
        Route::post('add',[EncounterController::class,'post_add']);
        Route::get('show',[EncounterController::class,'show'])->name('encounter-show');
    });
});
