@extends('layouts.app')

@section('title', 'Tech Blog')

@section('styles')
<style>
.subtitle {
    font-weight: normal;
    margin: 2rem 0;
}

.container {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.image {
    display: block;
    width: 600px;
    margin: 2rem 0;
}
</style>
@endsection

@section('content')
<div class="container">

    <h1>Welcome to Tech Blog</h1>

    <h5 class="subtitle">The best articles on the top tech trends are here.</h5>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Read Now</a>
    <img class="image" src="https://www.sodapdf.com/blog/wp-content/uploads/2019/01/blog-best-tech-websites.jpg" alt="">

</div>
@endsection