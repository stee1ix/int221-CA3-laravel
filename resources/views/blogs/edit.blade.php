@extends('layouts.app')

@section('content')
<div>

    <form method="POST" action="{{ route('blogs.update', ['blog' => $blog->id]) }}">
        @csrf
        @method('PUT')
        <label for="title">Enter Title</label>
        <input type="text" name="title" value="{{ $blog['title'] }}">
        @error('title')
        <div>
            {{ $message }}
        </div>
        @enderror

        <label for="body">Enter Body</label>
        <input type="text" name="body" value="{{ $blog['body'] }}">
        @error('body')
        <div>
            {{ $message }}
        </div>
        @enderror

        <label for=" author">Enter Author</label>
        <input type="text" name="author" value="{{ $blog['author'] }}">
        @error('author')
        <div>
            {{ $message }}
        </div>
        @enderror

        <button type=" submit">SUBMIT</button>
    </form>

</div>
@endsection