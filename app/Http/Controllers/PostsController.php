<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $posts=[
        1=>[
            'title'=>'intro',
            'content'=>'ok',
            'is_new'=>true
        ],
        2=>[
            'title'=>'nothig',
            'content'=>'NO',
            'is_new'=>false
        ]
        ];
    public function index(){
        return view('posts.index',['posts'=>$this->posts]);
    }
    public function store(Request $request)
    {
    //dd($request);
    $request->validate([
        'title'=>'bail|required|min:5|max:10',
        'content'=>'required|min:10'
        ]);
    $p = new Blog();
    $p->title = $request->input('title');
    $p->content = $request->input('content');
    $p->save();
   //optional line of code
   return redirect()->route('home.courses');
   $request->session()->flash('status','the blog is created');
    }
   
    public function show($id){
        abort_if(!sset($this->posts[$id]),404);
        return view('posts.show',['posts'=>$this->posts[$id]]);
    }
    public function edit(string $id) {
        return view('posts.edit',['posts'=>Blog::findOrFail($id)]);
        }
    // public function update(StorePost $request, string $id)
    //     {
    //     $post = Blog::findOrFail($id);
    //     $validated = $request->validated();
    //     $post->fill($validated);
    //     $post->save();
    //     $request->session()->flash('status', 'Blog is updated!');
    //     return
    //     redirect()->route('posts.show',['post'=>$post->id]);
    //     }
    public function destroy($id)
    {
        //
    }
    public function create(){
        return view('posts.create');
    }
   
}
