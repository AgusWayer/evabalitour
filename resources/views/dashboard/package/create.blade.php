@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/packages" method="POST" enctype="multipart/form-data">
        @csrf
         <!-- Menampilkan error -->
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
          <label for="productname">Title</label>
          <input
            type="text"
            class="form-control"
            id="productname"
            name="title"
            placeholder="Enter Destinationi Name"
          />
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="imageProduct">Image</label>
            <div>
                <img class="img-preview img-fluid mb-3 col-sm-5" id="imgprd">
            </div>
            <div class="input-group">
                <div class="">
                  <input type="number" hidden value="" id="imgid" name="library_id">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#media">Choose File</button>
                </div>
            </div>
                @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
        </div>
        <div class="form-group has-validation">
            <label for="features" class="form-label d-block">Features</label>
            <input id="x" type="hidden" name="features">
            <trix-editor input="x" class="w-100 h-100 "></trix-editor>
            @error('features')
            <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="discount">Discount</label>
            <input
              type="number"
              class="form-control"
              id="discount"
              name="discount"
              placeholder="Enter Discount"
            />
            @error('discount')
            <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input
              type="number"
              class="form-control"
              id="price"
              name="price"
              placeholder="Enter Price"
            />
            @error('price')
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
