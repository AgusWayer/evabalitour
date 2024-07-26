@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/category" method="POST" >
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="ctgname">Category Name</label>
          <input
            type="text"
            class="form-control"
            id="ctgname"
            name="name"
            placeholder="Enter Category Name"
          />
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
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
