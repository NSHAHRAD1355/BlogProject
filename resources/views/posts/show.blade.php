@extends('main')
@section('title' ,'| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class="lead">{{$post->body}}</p>

        </div>
        <div class="col-md-4">
{{--            <div class="well">--}}
{{--                <dl class="dl-horizontal">--}}
{{--                    <dt>Created At:</dt>--}}
{{--                    <dd>Time</dd>--}}
{{--                </dl>--}}
{{--                <dl class="dl-horizontal">--}}
{{--                    <dt>Last Updated</dt>--}}
{{--                    <dd>Time</dd>--}}
{{--                </dl>--}}
{{--                <hr>--}}
                <div class="row mt-5" >
                    <div class="col-ms-6">
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block">Edit</a>
                        <a href="#" class="btn btn-danger btn-block">Delete</a>
                    </div>
                    <div class="col-ms-6">

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
