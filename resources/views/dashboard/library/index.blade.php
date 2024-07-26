@extends('dashboard.layouts.main')

@section('content')

@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<a href="/admin-dashboard/library/create" class="btn btn-primary mb-3">Add Image</a>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Images in Eva Bali Tour</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body masonry-body">
            @foreach ($images as $img)
                <a href="/admin-dashboard/library/{{$img->id}}">
                    <div class="masonry-child">
                        <img src="{{asset('storage/'.$img->image)}}" class="" alt="">
                    </div>
                </a>
            @endforeach
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div>
        {{$images->links()}}
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <script>

  </script>
@endsection
