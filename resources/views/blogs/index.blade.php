@extends('layouts.app')

@section('styles')
<style>
.container {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;

}

.blogs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 20rem;
    margin: 1rem;
}

.create {
    width: 10rem;
    align-self: flex-end;
}
</style>
@endsection

@section('content')
<div class="container">

    <h1>Read all the Tech Blogs here</h1>

    <a href="{{ route('blogs.create') }}" class="btn btn-success create">Create a Blog</a>

    <div class="blogs">
        @if (count($blogs) > 0)
        @foreach ($blogs as $blog)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    {{$blog['title']}}
                </h5>
                <p class="card-text">By: {{$blog['author']}}</p>
                <a href="{{ route('blogs.show', ['blog' => $blog['id']]) }}" class=" btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
        @else
        <h2>No articles yet.</h2>
        @endif
    </div>

</div>
@endsection