@extends('dashboard.layouts.main')

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/admin-dashboard/article/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group has-validation">
          <label for="productname">Title</label>
          <input
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title"
            name="title"
            value="{{$post->title}}"
            onchange="slugMaker()"
            placeholder="Enter Title"
          />
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group has-validation">
          <label for="productname">Slug</label>
          <input
            type="text"
            class="form-control  @error('slug') is-invalid @enderror"
            id="slug"
            name="slug"
            readonly
            value="{{$post->slug}}"
            placeholder="Enter Product Name"
          />
          @error('slug')
          <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group has-validation">
            <label for="imageProduct">Image</label>
            <div>
                @if ($post->image)
                 <img src="{{asset('storage/'.$post->image)}}" class="img-preview img-fluid mb-3 col-sm-5" style="height: 18rem;object-fit: contain">
                @endif
                <img class="img-preview img-fluid mb-3 col-sm-5" >
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input
                  type="file"
                  class="custom-file-input @error('image') is-invalid @enderror"
                  id="imageProduct"
                  onchange="previewImage()"
                  name="image"
                />
                <label
                  class="custom-file-label"
                  for="imageProduct"
                  >Choose file</label
                >
              </div>
              </div>
              @error('image')
              <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
          </div>
        <div class="form-group has-validation">
          <label for="category">Content Post</label>
          <input id="x" type="hidden" name="content" value="{{$post->content}}">
          <trix-editor input="x"></trix-editor>
          @error('content')
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

  <script  type="text/javascript">
     const previewImage = ()=>{
        const image = document.querySelector('#imageProduct')
        const imgPrev = document.querySelector('.img-preview')
        imgPrev.style.display = 'block'
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPrev.src = oFREvent.target.result
            imgPrev.style.height = '18rem'
            imgPrev.style.objectFit = 'contain'
        }
    }
    const slugMaker = ()=>{
        const title = document.getElementById('title').value
        const slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        document.getElementById('slug').value = slug;
    }
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
@endsection
