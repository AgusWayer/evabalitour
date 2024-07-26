@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <div class="card-body">
        <h1 class="fs-3">{{$package->title}}</h1>
        <img src="{{asset('storage/'.$package->library->image)}}" alt="" class=" text-start" style="width:fit-content;height: 18rem;object-fit: contain" >
        <div>{!!$package->features!!}</div>
        <label for="">Discount</label>
        <h4>{{$package->discount}}</h4>
        <label for="">Price</label>
        <h2 class="fw-semibold">{{$package->price}}</h3>
    </div>
</div>
@endsection
