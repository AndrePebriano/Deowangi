@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
       </div>

       <!-- Content Row -->
       <div class="row">


           <!-- Earnings (Monthly) Card Example -->
           <div class="col-md-6 mb-4">
               <div class="card border-left-success shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                   Total Varian Produk</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <h1>{{$totalVarian}}</h1>
                               </div>
                           </div>
                           <div class="col-auto">
                            <i class="fas fa-solid fa-box fa-2x text-gray-300"></i>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
   
       <!-- Earnings (Monthly) Card Example -->
       <div class="col-md-6 mb-4">
           <div class="card border-left-danger shadow h-100 py-2">
               <div class="card-body">
                   <div class="row no-gutters align-items-center">
                       <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Total User</div>
                           <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h1>{{$totalUsers}}</h1>
                           </div>
                       </div>
                       <div class="col-auto">
                           <i class="fas fa-solid fa-user fa-2x text-gray-300"></i>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>
   @endsection