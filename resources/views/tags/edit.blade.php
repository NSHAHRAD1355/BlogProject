@extends('main')

@section('title','| Edit Tag')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Edit Tag</h1>
            <hr>

            <form method="POST" action="{{ action('TagController@update') }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <label for="name">Name:</label> <input name="name" type="text" class="form-control" value="{{$tag->name}}"><br>

                <input type="submit" value="Update Category" class="btn btn-success btn-lg btn-block" style="margin-top:20px">
                <br>
            </form>

            @include('partial.displayErrors')


        </div>
        <div class="col-md-2"></div>
    </div>
@endsection


