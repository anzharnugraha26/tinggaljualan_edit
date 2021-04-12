@extends('layout.back-end')
@section('title')
   Messages Users 
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              <h3 class="card-title">Daftar Orders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl_order" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Messages</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->subject}}</td>
                  <td>{{$item->message}}</td>
                
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