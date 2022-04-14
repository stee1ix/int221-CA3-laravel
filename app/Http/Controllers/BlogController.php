<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index()
    {

        return view('blogs.index', [
            'blogs' => Blog::all(),
        ]);
    }


    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        $user = Auth::user();

        $blog = new Blog();
        
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->author = $user["name"];

        $blog->save();

        return redirect()->route('blogs.index');
    }


    public function show($blog)
    {

        return view('blogs.show', [
            'blog' => Blog::findOrFail($blog)
        ]);
    }
}