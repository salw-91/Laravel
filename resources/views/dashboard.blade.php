@extends('layouts.master')
@extends('nav.nav')

@section('title')
Dashboard
@endsection

@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                 <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                 <td> 
                                     <a href="{{'/posts/' . $post->id}}" class="btn btn-primary">Show post</a>
                                     <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-success float-left mr-1">Edit</a>
                                     
                                </td>
                                 <td><form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST">
            
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-left"> Delete</button>
                        
                                    </form></td>
                                 </tr>
                            @endforeach
                   
                          
                        </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection