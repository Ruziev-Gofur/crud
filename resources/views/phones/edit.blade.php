@extends('phones.layout')
@section('content')
    <div class="card">
        <div class="card-header">Phone</div>
        <div class="card-body">

            <form action="{{ url('phones/' .$phones->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$phones->id}}" id="id" />
                <label>Title</label></br>
                <input type="text" name="title" id="title" value="{{$phones->title}}" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" value="{{$phones->price}}" class="form-control"></br>
                <label>Memory</label></br>
                <input type="text" name="memory" id="memory" value="{{$phones->memory}}" class="form-control"></br>
                <label>Screen size</label></br>
                <input type="text" name="screen_size" id="screen_size" value="{{$phones->screen_size}}" class="form-control"></br>
                <label>Is available</label></br>
                <input type="text" name="is_available" id="is_available" value="{{$phones->is_available}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
