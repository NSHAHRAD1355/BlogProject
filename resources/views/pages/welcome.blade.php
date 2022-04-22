@extends('main')
@section('title', '| homepage')



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container py-5 px-3 my-4 rounded" style="background:#E9ECEF">
                <h1 class="display-4 pb-2">Welcome to my blog</h1>
                <p class="lead">Thank you for visiting my weblog</p>
                <hr>
                {{--    <p class="py-2">This is peer to peer forum for sharing knowledge with each other</p>--}}
                <div class="btn btn-primary">Popular Post</div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background-color: beige">
            @foreach($posts as $post)



            <div class="post">
             <h3>{{$post->title}}</h3>
             <p>{{$post->body}}</p>
                <p>{{$post->category['name']}}</p>

             <a class="btn btn-primary" href="{{route('posts.show',$post->id)}}">Read More</a>
                <hr>
                @endforeach
        </div>



{{--        <div class="col-md-4 " style="background-color:lightblue">--}}
{{--        <h2>Sidebar</h2>--}}
{{--        </div>--}}
    </div>

@endsection




