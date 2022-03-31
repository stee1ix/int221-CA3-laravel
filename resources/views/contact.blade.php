@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
<style>
.container {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 70%;
}

.container h1 {
    margin-bottom: 2rem;
}

.container p {
    margin: 2rem;
}
</style>
@endsection

@section('content')
<div class="container">
    <h1>Contact Us</h1>


    <h6>Lovely Professional University</h6>
    <h6>Phargwara, Punjab</h6>
    <p>Lovely Professional University is a private university situated in Chaheru, Phagwara, Punjab, India. The
        university was established in 2005 by Lovely International Trust, under The Lovely Professional University Act,
        2005 and started operation in 2006.</p>
    <h6>Phone: 0182 440 4404</h6>
</div>
@endsection