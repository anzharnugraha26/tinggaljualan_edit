@extends('layout.back-end')
@section('title')
   Blog
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Blog</li>
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
              <div class="card-body pad table-responsive">
              <a href="{{url("/admin/blog/create-content-blog")}}" class="btn block btn-primary btn-lg" style="margin-top: 20px">Tambah Content </a>
              <button  data-target="#divisi" class="btn block btn-primary btn-lg" style="margin-top: 20px" data-toggle="modal">Tambah Category </button>
              <a data-target="#tag" class="btn block btn-primary btn-lg" style="margin-top: 20px" data-toggle="modal">Tambah Tags </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl_order" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>judul</th>
                  <th>kategori</th>
                  <th>image</th>
                  <th>slug</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->title}}</td>
                  
                   <td>{{$item->category->name}}</td> 
                  <td> 
                    @if (!empty($item->featured))
                    <img src="{{ asset('img/blog/' . $item->image) }}"
                        alt="" style="width:100px;height: 100px">
                     @endif 
                  </td>
                  
                    <td>{{$item->slug}}</td>
                                  
                  <td><a class="btn btn-info btn-sm" href="{{$item->id}}" style="margin-top: 10px"> <i class="fas fa-pencil-alt edit"></i> Edit</a>  <a class="btn btn-info btn-sm" href="{{$item->id}}" style="background:blue;margin-top: 10px"><i class="fas fa-eye"></i> View</a>
                      <a class="btn btn-danger btn-sm delete" href="#" style="margin-top: 10px" id="{{$item->id}}"><i class="far fa-trash-alt"></i> Delete</a>
                  </td>
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

<section class="content">
  <div class="modal fade" id="content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{url("save/category")}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="nama_belakang">Judul</label>
                          <input type="text" class="form-control" id="nama_divisi" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="nama_belakang">Kategori</label>
                        <input type="text" class="form-control" id="nama_divisi" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="nama_belakang">Tags</label>
                        <input type="text" class="form-control" id="nama_divisi" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="nama_belakang">thumbernail</label>
                        <input type="text" class="form-control" id="nama_divisi" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="nama_belakang">Kategori</label>
                        <input type="text" class="form-control" id="nama_divisi" name="name" required>
                      </div>
                      <textarea class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content"></textarea>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
</section>

<section class="content">
  <div class="modal fade" id="tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                  <form action="{{url("save/tag")}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="nama_belakang">Nama Tags</label>
                          <input type="text" class="form-control" id="nama_divisi" name="tag" required>
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

$(document).ready(function() {
  $('.delete').click(function() {
    var karyawan_id = $(this).attr('id');
    swal({
    title: "Are you sure?",
    text: "Are you sure you want to delete this data?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete-blog/" + karyawan_id  ;
          swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
          });
         } else {
          swal("Your imaginary file is safe!");
           }
           });
          });
});

</script>
    
@endsection