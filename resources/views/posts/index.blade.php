@extends('layouts.master')
@extends('nav.nav')

@section('title')
    Post
@endsection

@section('body')

    <h2> List of all Posts</h2>
    <hr>
    <div class="posts">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="card mb-4" style="max-width: 18rem;">
                                    <div class="card-header bg-dark text-white">
                                        {{$post->title}}
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h4> {{$post->title}}</h4>
                                        </div>
                                        <div class="card-text">
                                            {{$post->body}}
                                        </div>
                                        <hr>
                                        <a href="{{ '/posts/' . $post->id}}" class="btn btn-primary float-left mr-1">Show More</a>
                                        
                                        @if(auth()->user()->id == $post->user_id)

                                        <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-success float-left mr-1">Edit</a>
                                        <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST">
            
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger float-left"> Delete</button>
                            
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="col-md-3">
                
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-info text-white"> Stats.</div>
                    <div class="card-body">

                        <p class="card-text"> All Posts: {{$count}}</p>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
@endsection
