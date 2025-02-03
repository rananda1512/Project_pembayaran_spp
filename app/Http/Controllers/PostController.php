<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use App\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //menggunakan middleware pada controller
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }

    // public function show(Post $post)
    // {
    //     //melempar ke error 404 dengan method firstOrFail
    //     //$post=Post::where('slug',$post)->first0rFail();

    //     //melempar ke error 404
    //     // if (!$post) {
    //     //     abort(404);
    //     // }
    //     return view('show', compact("post"));
    // }

    public function index()
    {
        $post = Post::paginate(6);
        return view('posts.index', ['posts' => $post]);
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', [
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }
    public function store(PostRequest $request)
    {


        //basin input
        // $post = new Post;
        // $post->title = $request->title;
        // $post->slug = Str::slug($request->title);
        // $post->body = $request->body;
        // $post->save();

        //cara kedua 
        // Post::create([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title),
        //     'body' => $request->body,
        // ]);

        //cara ketiga
        //validate field
        $attr = $request->all();

        //menambahkan category_id dengan category 
        $attr['category_id'] = request('category');


        //asign title to slug
        $attr['slug'] = Str::slug(request()->title);

        //create new post
        $post = auth()->user()->posts()->create($attr);

        //menambahkan data pada tags
        $post->tags()->attach(request('tags'));

        session()->flash('suscces', "that post");
        // session()->flash('error', "that post");
        return  redirect()->to('posts');
    }

    public function edit(Post $post)
    {
        return view('posts/edit', [
            'post' => $post,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function update(Post $post)
    {

        $attr = $this->validateRequest();
        $attr['category_id'] = request('category');
        $post->update($attr);
        $post->tags()->sync(request('tags'));
        session()->flash('suscces', "that post update");
        return redirect()->to('posts');
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3|',
            'body' =>  'required|min:2'
        ]);
    }

    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
        session()->flash('suscces', "delete");
        return redirect()->to('posts');
    }
}
