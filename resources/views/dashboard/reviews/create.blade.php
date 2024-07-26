@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/reviews " method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif
      <div class="card-body">
        <div class="form-group">
          <label for="productname">Author</label>
          <input
            type="text"
            class="form-control"
            id="productname"
            name="author"
            placeholder="Enter Destinationi Name"
          />
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="productname">Job (Optional)</label>
          <input
            type="text"
            class="form-control"
            id="productname"
            name="job"
            placeholder="Enter Destinationi Name"
          />
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group has-validation">
            <label for="content" class="form-label d-block">Review</label>
            <textarea name="description" id="" class="w-100 form-control " style="resize: none;height: 60vh;"></textarea>
            @error('description')
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
