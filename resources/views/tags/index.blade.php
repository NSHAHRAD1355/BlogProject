@extends('main')
@section('title' , '| All Tag')
@section('content')
    <div class="row">
        <div class="col-md-10" style="margin-top:20px">
            <h1>All Tag</h1>
        </div>
        <div class="col-md-2" style="margin-top:20px">
            <a href="{{route('tags.create')}}" class="btn btn-lg btn-block btn-primary" style="margin-top:12px"
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
                @foreach ($tags as $tag)
                    <tr>
                        <th>{{$tag->id}}</th>
                        <td>{{$tag->name}}</td>

                        <td>{{$tag->created_at}}</td>
                        <td><a href="{{url ('tags.show',$tag->id)}}" class="btn btn-default">view</a><a href="{{url('tags.edit',$tag->id)}}" class="btn btn-default">Edit</a>  <a href="{{url('tags.destroy',$tag->id)}}" class="btn btn-default">Delete</a>  </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            {{ $tags->links() }}
        </div>
    </div>


@endsection


