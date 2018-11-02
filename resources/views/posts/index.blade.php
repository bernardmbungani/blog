@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">POSTS <span class="float-right"><a href="{{route('posts.create')}}"> create post</a></span></div>

                <div class="card-body">
                   
                    @foreach($posts as $post)
                        <p class="card-title">{{$post->title}} </p>
                        <p class="card-text">{{$post->body}} </p>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
