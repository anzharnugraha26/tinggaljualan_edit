@extends('layout.back-end')
@section('title')
   Categories 
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
           
            <!-- /.card-header -->
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl_order" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name Categories</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($cat as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>                         
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

  <section class="content">
    <div class="modal fade" id="divisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Divisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url("save/category")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_belakang">Nama Category</label>
                            <input type="text" class="form-control" id="nama_divisi" name="name" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
@section('script')
<script>
$(document).ready(function() {
  $('#tbl_order').DataTable();
});
</script>
    
@endsection