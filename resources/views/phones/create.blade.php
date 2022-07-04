@extends('phones.layout')
@section('content')
    <div class="card">
        <div class="card-header">Phone</div>
        <div class="card-body">

            <form action="{{ url('phones') }}" method="post">
                {!! csrf_field() !!}
                <label>Title</label></br>
                <input type="text" name="title" id="title" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" class="form-control"></br>
                <label>Memory</label></br>
                <input type="text" name="memory" id="memory" class="form-control"></br>
                <label>Screen size</label></br>
                <input type="text" name="screen_size" id="screen_size" class="form-control"></br>
                <label>Is available</label></br>
                <input type="text" name="is_available" id="is_available" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
