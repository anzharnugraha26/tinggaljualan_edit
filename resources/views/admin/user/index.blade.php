@extends('layout.back-end')
@section('title')
   Users
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl_order" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>
                    @if($item->role == 'admin')
                    {{$item->role}}
                    @else 
                    User
                    @endif
                  </td>
                  @if($item->isOnline())
                  <td class="text-success">Online</td>
                  @else
                  <td class="text-danger">Offline</td>
                  @endif
                  <td><a class="btn btn-info btn-sm" href="{{$item->id}}"> <i class="fas fa-pencil-alt edit"></i>Edit</button></a></td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('script')
<script>
$(document).ready(function() {
  $('#tbl_order').DataTable();
});
</script>
    
@endsection