<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Post;

use App\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use App\Exceptions\PostNotFoundException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view ('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|min:3',
            'date' => 'nullable',
            'description' => 'max:20',
        ]);

        $data = $request->all();

        var_dump($data);

        $data['user_id'] = Auth::user()->id;
        $newPost = new Post();
        $newPost->author = $data['author'];
        $newPost->title = $data['title'];
        if($request->hasFile('image')) {
            $pathD = Storage::disk('public')->put('image', $request->file('image'));
            $pathDemo = asset('storage/' . $pathD);
            $newPost->image = $pathDemo;
        }
        $newPost->description = $data['description'];
        $newPost->date = $data['date'];
        $newPost->save();
        $newPost->categories()->attach($data['category']);

        return redirect()->route('admin.posts.show', $newPost);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view ('admin.posts.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories= Category::all();
        return view('admin.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        
        $post->author = $data['author'];
        $post->categories()->sync($data['category']);
        $post->title = $data['title'];
        $post->image = $data['image'];
        $post->description = $data['description'];
        $post->date = $data['date'];
        $post->save();

        return redirect()->route('admin.posts.show', $post->id )->with('message', 'Post modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        {
            $post->delete();
            return redirect()->route('admin.posts.index')->with('delete-message', 'Post eliminato') ;
        }
    }
}
