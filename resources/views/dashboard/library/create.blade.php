@extends('dashboard.layouts.main')
@section('content')
<div class="my-4    ">
    <form action="/admin-dashboard/library" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        @error('image')
        <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        <div class="form-group has-validation">
            <label for="imageProduct">Image</label>
            <div>
                <img class="img-preview img-fluid mb-3 col-sm-5" >
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input
                  type="file"
                  class="custom-file-input @error('image') is-invalid @enderror"
                  id="image"
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
            imgPrev.style.height = '18rem'
            imgPrev.style.objectFit = 'contain'
        }
    }
</script>
@endsection
