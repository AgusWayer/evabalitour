@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <div class="card-body">
        <h1 class="fs-2">{{$review->author}}</h1>
        <h1 class="fs-4">{{$review->job}}</h1>
        <p class="f-5">{!!$review->description!!}</p>
    </div>
</div>
@endsection
