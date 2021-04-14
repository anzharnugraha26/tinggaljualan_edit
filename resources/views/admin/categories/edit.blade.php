@extends('layout.back-end')
@section('title')
   Edit Category 
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Update Category
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>

            <div class="card-body">
              <form method="POST" action="{{url("/admin/categories/update/$cat->id")}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="nama_belakang">Name Category</label>
                          <input type="text" class="form-control" placeholder="Input Judul" name="name" value="{{$cat->name}}" required>
                        </div>
                        <div class="col">
                          <label for="nama_belakang">Title</label>
                          <textarea class="form-control" name="title">{{$cat->title}}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_belakang">	description</label>
                      <textarea class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description" required>{!!$cat->description!!}</textarea>  
                    </div>   
                    <button type="submit" class="btn btn btn-primary btn-lg" style="margin-top: 20px"> <i class="fas fa-save"></i> Update</button>           
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
  </div>
@endsection