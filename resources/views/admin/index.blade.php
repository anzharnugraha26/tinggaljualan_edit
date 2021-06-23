@extends('layout.back-end')
@section('title')
   Dashboard 
@endsection
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Selamat Datang Di Dahboard Admin Website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div> 
        </div> 
      </div> 
  </div>
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <?php $u = DB::table('orders')->count(); ?>
              <div class="inner">
                <h3><?php  echo $u; ?></h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url("admin/orders")}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-6">
             
            <div class="small-box bg-success">
              <div class="inner">
                <?php $ad = DB::table('users')->where('role', "admin")->count(); ?>
                <h3><?php  echo $ad; ?></h3>

                <p>Admin Control</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('admin/daftar-users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-4 col-6">
          
            <div class="small-box bg-warning">
              <div class="inner">
                <?php $us = DB::table('users')->count(); ?>
                <h3><?php  echo $us; ?></h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div> 
      </div>

      <div class="container-fluid">
       
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Products</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Name Category</th>
                      <th>Price</th>
                      <th>promo price</th>
                      <th>More</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $item)      
                      <tr>
                      <td>
                        {{$item->name}}
                      </td>
                      <td>
                        {{ 'Rp.' . number_format($item->harga_asli) }}
                      </td>
                      <td>
                        @if($item->harga_promo == null)
                        No Promo
                        @else
                        {{ 'Rp.' . number_format($item->harga_promo) }}
                        @endif
                      </td>
                      <td>
                        <a class="btn btn-info btn-sm" href="{{url('service-detail/'.$item->id)}}" style="background:blue;margin-top: 10px" target="_blank"><i class="fas fa-eye"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">User Online</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  @php $u_total = "0"; @endphp
                  @foreach ($user as $item)
                  @php
                      if($item->isOnline()){
                          $u_total = $u_total + 1;
                      }
                  @endphp
                  @endforeach 
                  <?php echo $u_total ;   ?> User Online
                  
                  @foreach ($user as $item)
                  @if($item->isOnline())
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                      <i class="ion ion-ios-refresh-empty"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                      <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-success"></i> 
                        @if($item->role == "admin")
                        <label>Admin</label>
                        @else
                        <label>User</label>
                        @endif
                      </span>
                      <span class="text-muted">{{$item->email}}</span>
                    </p>
                  </div>
                  @endif
                  @endforeach
                  <!-- /.d-flex -->
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
      </div>
      
    </section>

  </div>

  @endsection
  