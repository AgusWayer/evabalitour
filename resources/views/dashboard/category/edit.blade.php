@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/category/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="productname">Product Name</label>
          <input
            type="text"
            class="form-control"
            id="productname"
            value="{{$category->name}}"
            name="name"
            placeholder="Enter Product Name"
          />
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </div>
    </form>
  </div>

@endsection
