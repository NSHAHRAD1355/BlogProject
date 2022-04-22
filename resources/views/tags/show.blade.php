@extends('main')
@section('title' ,'| View tag')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$tag->name}}</h1>

            <hr>
            <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-block" >Edit</a>


            <form method="post" action="{{ action('TagController@destroy', $tag->id) }}">
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


