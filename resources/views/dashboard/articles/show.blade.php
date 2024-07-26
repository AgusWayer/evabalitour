@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <div class="card-body">
        <h1 class="fs-3">{{$article->title}}</h1>
        <img src="{{asset('storage/'.$article->library->image)}}" alt="" class=" text-start" style="width:fit-content;height: 18rem;object-fit: contain" >
        <div>{!!$article->description!!}</div>
    </div>
</div>
@endsection
