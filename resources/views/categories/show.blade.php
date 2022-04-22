@extends('main')
@section('title' ,'| View Category')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$category->name}}</h1>

            <hr>
            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-block" >Edit</a>


            <form method="post" action="{{ action('CategoryController@destroy', $category->id) }}">
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

