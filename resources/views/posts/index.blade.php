@extends('main')
@section('title' , '| All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10" style="margin-top:20px">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2" style="margin-top:20px">
            <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary" style="margin-top:12px"
            >Create New Post</a>
        </div>
    </div> {{--    end of row--}}
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{ substr($post->body ,0,100)}}{{strlen($post->body) > 100 ? "..." : ""}}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default">view</a><a href="{{route('posts.edit',$post->id)}}" class="btn btn-default">Edit</a>  </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection
