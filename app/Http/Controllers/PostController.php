<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */


 
     
    public function search(Request $request)
    {
        $posts = Post::where('body','LIKE','%'.$request->keyword.'%')->with('user')->paginate(10);
        $title = "نتائج البحث عن: ".$request->keyword;
        return view('index', compact('posts', 'title'));
    }

    public function index()
    {
        $posts=Post::with('user:id,name')->latest()->paginate(10);
        $title='جميع المنشورات';
        return view('index',compact('posts','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = $post->comments->sortByDesc('created_at');

        // $comments=$post->comments->first();
        return view('posts.show',compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
