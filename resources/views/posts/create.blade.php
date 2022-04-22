@extends('main')

@section('title','| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Create New Post</h1>
            <hr>

            <form method="POST" action="{{ action('PostController@store') }}">
                {{ csrf_field() }}
                <label for="title">Title:</label> <input name="title" type="text" class="form-control"><br>
                <label for="body">Body:</label> <textarea  type="text" id="message" name="body" class="form-control"></textarea><br>

                <label for="category_id">Category</label>
                <select name="category_id">
                    @foreach($categories as $id => $category)
                        <option value="{{$id}}">{{$category}}</option>
                    @endforeach
                </select><br>

                <label for="tags">Tag</label>
                <select   name="tags">
                    @foreach($tags as $id => $tag)
                        <option value="{{$id}}">{{$tag}}</option>
                    @endforeach
                </select><br>

                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block" style="margin-top:20px">
                <br>
            </form>

        @include('partial.displayErrors')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
