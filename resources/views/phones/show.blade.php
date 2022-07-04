@extends('phones.layout')
@section('content')
    <div class="card">
        <div class="card-header">Phone</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Title : {{ $phones->title }}</h5>
                <p class="card-text">Price : {{ $phones->price }}</p>
                <p class="card-text">Memory : {{ $phones->memory }}</p>
                <p class="card-text">Screen size : {{ $phones->screen_size }}</p>
                <p class="card-text">Is available : {{ $phones->is_available }}</p>
            </div>

            </hr>

        </div>
    </div>
