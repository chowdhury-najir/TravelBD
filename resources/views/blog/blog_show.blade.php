@extends('layouts.main')

@section('content')
<div class="container">
    <div class="lg-4">
    
    @foreach($blog as $blog)
       @include('layouts.blog_layout.blog_item')
       
    @endforeach
    </div>
    <div class="lg-8">
    <h1>lg-8</h1>
    </div>
</div>

@endsection