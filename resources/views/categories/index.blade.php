@extends('main')
@section('title' , '| All Category')
@section('content')
    <div class="row">
        <div class="col-md-10" style="margin-top:20px">
            <h1>All Category</h1>
        </div>
        <div class="col-md-2" style="margin-top:20px">
            <a href="{{route('categories.create')}}" class="btn btn-lg btn-block btn-primary" style="margin-top:12px"
            >Create New Category</a>
        </div>
    </div> {{--    end of row--}}
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Name</th>

                <th>Created At</th>
                <th></th>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>

                        <td>{{$category->created_at}}</td>
                        <td><a href="{{route('categories.show',$category->id)}}" class="btn btn-default">view</a><a href="{{route('categories.edit',$category->id)}}" class="btn btn-default">Edit</a>  <a href="{{route('categories.destroy',$category->id)}}" class="btn btn-default">Delete</a>  </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>


@endsection

