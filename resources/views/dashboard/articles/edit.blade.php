@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/articles/{{$article->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="productname">Article Title</label>
          <input
            type="text"
            class="form-control"
            id="productname"
            value="{{$article->title}}"
            name="title"
            placeholder="Enter Product Name"
          />
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="imageProduct">Image</label>
            <div>
                @if ($article->library_id)
                    <img src="{{asset('storage/'.$article->library->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 18rem;object-fit:contain" id="imgprd">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5" >
                @endif
            </div>
            <div class="input-group">
                <div class="">
                  <input type="number" hidden value="{{$article->library_id}}" id="imgid" name="library_id">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#media">Choose File</button>
                </div>
            </div>
          </div>
          @error('image')
          <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
        <div class="form-group has-validation">
            <label for="content" class="form-label d-block">Content</label>
            <input id="x" type="hidden" name="description" value="{{$article->description}}">
            <trix-editor input="x" class="w-100 h-100 "></trix-editor>
            @error('description')
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
  <div class="modal fade" id="media" tabindex="-1" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Select or Upload File</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card-body masonry-body">
                @foreach ($images as $img)
                    <div class="container-icon" id="" data-img-id="{{$img->id}}" data-img-src = "{{asset('storage/'.$img->image)}}">
                        <div class="overlay d-none" id="overlay"></div>
                        <div class="icon" id="icon">
                            <i class="far fa-circle"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="masonry-child">
                            <img src="{{asset('storage/'.$img->image)}}" class="" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="submitMedia" data-bs-dismiss="modal" >Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection