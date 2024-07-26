@extends('dashboard.layouts.main')

@section('content')

@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<a href="/admin-dashboard/article/create" class="btn btn-primary mb-3">Add Posts</a>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Article List in Murti Bambu</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td><a href="/admin-dashboard/article/{{$post->id}}" class="btn btn-primary text-white me-1"><i class="fas fa-eye"></i></a>
                        <a href="/admin-dashboard/article/{{$post->id}}/edit" class="btn btn-warning me-1 text-white"><i class="fas fa-pen"></i></a>
                        <form action="/admin-dashboard/article/{{$post->id}}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button href="/" class="btn btn-danger text-white" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </form>
      </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <script>

  </script>
@endsection
