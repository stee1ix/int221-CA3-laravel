@extends('layouts.app')

@section('styles')
<style>
.container {
    display: flex;
    /* flex-direction: column; */
    justify-content: center;
}

.card {
    width: 100rem;
    margin: 1rem;
    padding: 2rem;
}

form label {
    margin: 1rem 0 0.5rem 0;
}


.submit {
    margin-top: 2rem;
}
</style>
@endsection

@section('content')
<div class="container">

    <form class="card" method="POST" action="{{ route('blogs.store') }}">
        <h2>Write your blog</h2>

        @csrf
        <label for="title">Enter Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        @error('title')
        <div>
            {{ $message }}
        </div>
        @enderror

        <label for="body">Enter Body</label>
        <textarea rows="5" class="form-control" type="text" name="body" value="{{ old('body') }}"></textarea>
        @error('body')
        <div>
            {{ $message }}
        </div>
        @enderror


        <button class="btn btn-success submit" type=" submit">SUBMIT</button>
    </form>

</div>
@endsection