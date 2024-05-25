@extends('Admin.layouts.index')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ice vegas</h1>
        </div>

        <!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>

            <li class="breadcrumb-item active">Dashboard </li>
          </ol>
        </div>

        <!-- /.col -->
      </div>

      <!-- /.row -->
    </div>

    <!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->
  <!-- Main content -->

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->

          <div class="small-box" style="background-color:white;; border: 2px solid #d1c192;">
            <div class="inner">
              <h3> {{ $ProduitsCount}}</h3>

              <p>Produits</p>
            </div>

           

            <a
              href="#"
              class="small-box-footer"
            >
             

            
            </a>
          </div>
        </div>

        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
 
          <div class="small-box" style="background-color:white;; border: 2px solid #d1c192;">
            <div class="inner">
              <h3>
               {{ $categoryCount}}

                
              </h3>

              <p> Categories</p>
            </div>

         

            <a
              href="#"
              class="small-box-footer"
            >
              

            
            </a>
          </div>
        </div>

        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->

          <div class="small-box" style="background-color:white;; border: 2px solid #d1c192;">
            <div class="inner">
              <h3>{{$clientCount}}</h3>

              <p> utilisateurs</p>
            </div>

          

            <a
              href="#"
              class="small-box-footer"
            >
              

            
            </a>
          </div>
        </div>

        <!-- ./col -->

   

        <!-- ./col -->
      </div>

      <!-- /.row -->
      <!-- Main row -->

      <div class="row">
        <!-- Left col -->

      

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable) -->


        <!-- right col -->
      </div>

      <!-- /.row (main row) -->
    </div>

    <!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>

@endsection

