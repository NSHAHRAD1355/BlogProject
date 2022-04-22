@extends('main')

@section('title','| Create New Tag')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Create New Tag</h1>
            <hr>

            <form method="POST" action="{{ action('TagController@store') }}">
                {{ csrf_field() }}
                <label for="name">Name:</label> <input name="name" type="text" class="form-control"><br>

                <input type="submit" value="Create Tag" class="btn btn-success btn-lg btn-block" style="margin-top:20px">
                <br>
            </form>

            @include('partial.displayErrors')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection

