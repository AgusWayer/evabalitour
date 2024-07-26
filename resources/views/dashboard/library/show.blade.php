@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-7">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div>
                        <img src="{{asset('storage/' . $image->image)}}" class="" alt="" style="width: 18rem; height: 18rem; object-fit: contain" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form action="/admin-dashboard/library/{{$image->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
