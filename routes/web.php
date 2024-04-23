<?php
use App\Http\Controllers\AboutCOntroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('new');
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('post/{id}', function ($id) {
//     $post=[
//         1=>[
//             'title'=>'intro',
//             'content'=>'ok',
//             'is_new'=>true
//         ],
//         2=>[
//             'title'=>'nothig',
//             'content'=>'NO',
//             'is_new'=>false
//         ]
//         ];
//         return view('post.show',['post'=>$post[$id]]);
// });


// Route::get('/post', function () {
//     return "Welcome to honors Track";
// })->name('home.index');



// Route::get('/', function () {
//     return "Welcome to honors Track";
// })->name('home.index');

// Route::get('/courses/{id}', function ($id) {
//      return 'Honor course  '. $id;
// })
// ->name('home.posts.id')
// ;

// Route::get('/courses', function () {
//     return 'Welcome to Honors: CSTH45: Web Development using Laravel Framework';
// })->name('home.courses');

// Route::get('/kartik', function () {
//     return 'Kartik Vhonale: I took this course because i love web design.';
// })->name('home.courses');




// Route::get('/post/{id}', function ($id) {
//     return 'hey bro you are at   '. $id;
// })->name('home.posts.id');

// $post=[
//     1=>[
//         'title'=>'intro',
//         'content'=>'ok',
//         'is_new'=>true
//     ],
//     2=>[
//         'title'=>'nothig',
//         'content'=>'NO',
//         'is_new'=>false
//     ]
//     ];
// Route::get('post/', function () use ($post) {
//     return view('post.index',['post'=>$post]);
// })->name('post.index');


// Route::get('blogs/{id}',function($id){
//     $blogs = [
//     'home'=>[
//     'title'=>'blogsite',
//     'main'=>'Welcome to home page',
//     'content'=>'Info about home',
//     'foot'=>'Home'
//     ],
//     'posts'=>[
//     'title'=>'blogsite',
//     'main'=>'Welcome to Posts page',
//     'content'=>'Info about posts',
//     'foot'=>'Posts'
//     ],
//     'about'=>[
//     'title'=>'blogsite',
//     'main'=>'Welcome to About page',
//     'content'=>'Info about about',
//     'foot'=>'About'
//     ]
//     ];
//     abort_if(!isset($blogs[$id]),404);
//     return view('posts.blog',['blog'=>$blogs[$id]]);
//     }) -> name('posts.blog');
//     Route::get('posts/{id}',function($id){
//     $posts = [
//     1=>[
//     'title'=>'Intro to Laravel',
//     'content'=>'This is a short intro to Laravel',
//     'is_new'=>true
//     ],
//     2=>[
//     'title'=>'Intro to PHP',
//     'content'=>'This is a short intro to php',
//     'is_new'=>false
//     ],
//     'h'=>[
//     'title'=>'Intro to web dev',
//     'content'=>'This is a mern stack course',
//     'is_new'=>true
//     ]
//     ];
//     abort_if(!isset($posts[$id]),404);
//     return view('posts.show',['post'=>$posts[$id]]);
//     }) -> name('posts.show');
//     Route::view('/','welcome')
//     -> name('welcome');
    
//     Route::get('/single',AboutCOntroller::class);

//implementing a resource controller

// Route::resource('posts',PostsController::class)->only(['index','show']);
$posts = [
    1=>[
    'title'=>'Intro to Laravel',
    'content'=>'This is a short intro to Laravel',
    'is_new'=>true
    ],
    2=>[
    'title'=>'Intro to PHP',
    'content'=>'This is a short intro to php',
    'is_new'=>false
    ],
    'h'=>[
    'title'=>'Intro to web dev',
    'content'=>'This is a mern stack course',
    'is_new'=>true
    ]
    ];
//this is for resposes
// Route::get('/fun/responses', function() use ($posts) {
// 	return response( $posts, 201) 
//     -> header('Content-type', 'application/json')
//     -> cookie('MY_COOKIE', 'Charan Jeet', 3600);    
// });

// Route:: get('/fun/redirect', function(){
//     return redirect('/fun/responses');
// });

// Route:: get('/fun/back', function(){
//     return back();
// });

Route:: get('/fun/named-route', function(){
    return redirect() -> route('posts.show', ['id' => 1]) ;
    });

    Route:: get('/fun/download', function(){
        return response() -> download(public_path('\one.jpg'),'one.png');
    });

    Route:: prefix('/fun')-> name('fun.')->group(function() use($posts){
        Route::get('responses', function() use($posts) {
              return response($posts, 201) 
          -> header('Content-type', 'application/json')
          ->cookie('MY_COOKIE', 'Charan Jeet', 3600);
          });   
          Route:: get('redirect', function(){
              return redirect   ('/');
          });
          Route:: get('back', function(){
              return back();
          });
          Route:: get('named-route', function(){
              return redirect() -> route('posts.show', ['id' => 1]) ;
              });
          Route:: get('away', function(){
              return redirect() -> away('https://www.google.com');
          });
          Route:: get('json', function() use ($posts){
              return redirect() -> json($posts);
          });   
          Route:: get('download', function(){
            return response() -> download(public_path('\one.jpg'),'one.png');
          });
    });

    // Route::get('/posts',function() use ($posts) {
    //     dd(request() -> all());
    //     });
        
    // Route::get('/posts',function() use ($posts) {
    //     dd(request() -> input('page',1));
    //     });
    // Route::get('/posts',function() use ($posts) {
    //     dd((int) request() -> query('page',1));
    //     });
    // Route::resource('posts',PostsController::class)
    //         ->only('index','show','create','store');
    Route::resource('posts',PostsController::class);
    
        