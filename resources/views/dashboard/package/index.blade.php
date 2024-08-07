@extends('dashboard.layouts.main')

@section('content')

@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<a href="/admin-dashboard/packages/create" class="btn btn-primary mb-3">Add {{$title}}</a>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$title}} Lists in Murti Bambu</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($packages as $pckg)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pckg->title}}</td>
                    <td>{{$pckg->price}}</td>
                    <td><a href="/admin-dashboard/packages/{{$pckg->id}}" class="btn btn-primary text-white me-1"><i class="fas fa-eye"></i></a>
                        <a href="/admin-dashboard/packages/{{$pckg->id}}/edit" class="btn btn-warning me-1 text-white"><i class="fas fa-pen"></i></a>
                        <form action="/admin-dashboard/packages/{{$pckg->id}}" method="POST" class="d-inline">
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
@endsection
