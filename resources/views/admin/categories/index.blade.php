@extends('layout.back-end')
@section('title')
   Categories 
@endsection
@section('content')

<div class="content-wrapper">
 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
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
                  <td><a class="btn btn-info btn-sm" href="{{url('/admin/categories/'.$item->id)}}" style="margin-top: 10px"> <i class="fas fa-pencil-alt edit"></i> Edit</button></a>
                    <a class="btn btn-info btn-sm" href="{{url('service-detail/'.$item->id)}}" style="background:blue;margin-top: 10px" target="_blank"><i class="fas fa-eye"></i> View</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              </div>
            </div>
         
          </div>
       
        </div>
      
      </div>
     
    </section>
 
  </div>

@endsection
@section('script')
<script>
$(document).ready(function() {
  $('#tbl_order').DataTable();
});
</script>
    
@endsection