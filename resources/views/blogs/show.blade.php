@extends('layouts.app')

@section('styles')
<style>
.container {
    display: flex;
    flex-wrap: wrap;
}

.card {
    width: 20rem;
    margin: 1rem;
}

.author {
    font-weight: normal;
}

p {
    margin-top: 2rem;
}
</style>
@endsection

@section('content')
<div class="container">

    <div>
        <h1> {{$blog['title']}}</h1>
        <h4 class="author">By: {{$blog['author']}}</h4>
        <p>{{$blog['body']}}</p>

    </div>

</div>
@endsection