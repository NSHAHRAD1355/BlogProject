@extends('main')

@section('title','| Edit Blog Post')
@section('content')
    <div class="row">
        <div class="col-md-8">


                <form method="POST" action="{{ action('PostController@update',$post->id) }}">
                    {{method_field('PATCH')}}
                    {{ csrf_field() }}
                    <label for="title">Title:</label>
                    <input name="title" type="text" class="form-control" value="{{$post->title}}"><br>
                    <label for="body">Body:</label>
                    <textarea  type="text" id="message" name="body" class="form-control">{{$post->body}}</textarea><br>
                    <input type="submit" value="Update" class="btn btn-success btn-lg btn-block" style="margin-top:20px">
                    <br>
                    <label for="category_id">Category</label>
                    <select name="category_id">
                        @foreach($categories as $id => $category)
                            <option value="{{$id}}">{{$category}}</option>
                        @endforeach
                    </select><br>
                </form>

                @include('partial.displayErrors')




        </div>
        <div class="col-md-4">

            <div class="row mt-5" >
{{--                <div class="col-ms-6">--}}
{{--                    <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-block">Cancel</a>--}}
{{--                    <a href="{{route('posts.update',$post->id)}}" class="btn btn-success btn-block">Save</a>--}}
{{--                </div>--}}
                <div class="col-ms-6">

                </div>
            </div>
        </div>
    </div>

    </div>


@endsection
