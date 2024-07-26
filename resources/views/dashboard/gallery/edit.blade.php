@extends('dashboard.layout.dashboard')
@section('content')
<div class="my-4 card card-primary">
    <form action="/admin-dashboard/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group has-validation" >
              <label for="productname">Author</label>
              <input
                type="text"
                class="form-control @error('user_id') is-invalid @enderror"
                id="name"
                name="name"
                readonly
                value="{{$post->user->name}}"
              />
              <input
                type="hidden"
                name="user_id"
                readonly
                value="{{auth()->user()->id}}"
              />
              @error('user_id')
              <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group has-validation">
              <label for="productname">Title</label>
              <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                onchange="slugMaker()"
                value="{{$post->title}}"
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
                value="{{$post->slug}}"
                readonly
                placeholder="Automatically Generated"
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
                      value="{{old('image')}}"
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
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    @foreach ($category as $ctg)
                        <option value="{{$ctg->id}}" @if($post->category->id == $ctg->id)
                            selected
                        @endif>{{$ctg->name}}</option>
                    @endforeach
                </select>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="form-group has-validation">
                <label for="content" class="form-label d-block">Content</label>
                <input id="x" type="hidden" name="content" value="{{$post->content}}">
                <trix-editor input="x" class="w-100 h-100 "></trix-editor>
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
<script>
    const previewImage = ()=>{
        const image = document.querySelector('#image')
        const imgPrev = document.querySelector('.img-preview')
        imgPrev.style.display = 'block'
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPrev.src = oFREvent.target.result
        }
    }
    const slugMaker = ()=>{
        const title = document.getElementById('title').value
        const slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        document.getElementById('slug').value = slug;
    }

</script>
@endsection
