@extends('main')
@section('title' ,'| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class="lead">{{$post->body}}</p>
            <p class="lead">{{$post->category_id}}</p>
            <p class="lead">{{$post->category['name']}}</p>
            <p class="lead">
            <td>
                @foreach($post->tags as $tag)
                    {{$tag->name}}
                @endforeach

            </td>
            </p>
            <hr>
            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block" >Edit</a>


            <form method="post" action="{{ action('PostController@destroy', $post->id) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input type="submit" value="Delete" class="btn btn-danger btn-block">
            </form>

        </div>
        <div class="col-md-4">





            </div>
        </div>

    </div>


@endsection
