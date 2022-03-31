<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    // private static function getData() {
    //     return [
    //         ['id'=>1,'title'=>'NodeJS','body'=>'NodeJS is the best ever.','author'=>'stee1ix'],
    //         ['id'=>2,'title'=>'NodeJS','body'=>'NodeJS is the best ever.','author'=>'stee1ix'],
    //         ['id'=>3,'title'=>'NodeJS','body'=>'NodeJS is the best ever.','author'=>'stee1ix'],
    //         ['id'=>4,'title'=>'NodeJS','body'=>'NodeJS is the best ever.','author'=>'stee1ix'],
    //     ];
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET

        return view('blogs.index', [
            'blogs' => Blog::all(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET
        return view('blogs.create');
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
            'title'=>'required',
            'body'=>'required',
        ]);

        $user = Auth::user();
        // print_r($user);

        //POST
        $blog = new Blog();
        
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        // $blog->author = $request->input('author');
        $blog->author = $user["name"];

        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        //GET

        return view('blogs.show', [
            'blog' => Blog::findOrFail($blog)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        //GET
        return view('blogs.edit', [
            'blog' => Blog::findOrFail($blog)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        //POST
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'author'=>'required',
        ]);

        //POST
        $record = Blog::findOrFail($blog);
        
        $record->title = $request->input('title');
        $record->body = $request->input('body');
        $record->author = $request->input('author');

        $record->save();

        return redirect()->route('blogs.show', $blog);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}