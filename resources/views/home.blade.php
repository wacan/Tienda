@extends('layouts.admin')

@section('content')
  <div class="row">
     @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-green">
          <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">  </h2>
          <?php $users_count = DB::table('users')->count(); ?>
            <h2>{{ $users_count ?? '0' }}</h2>
          <p class="text-muted">Usuarios</p>
        </div>
       </div>
    </div>
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"></h2>
          <?php $categories_count = DB::table('categories')->count(); ?>
          <h2>{{ $categories_count ?? '0' }}</h2>
          <p class="text-muted">Categorías</p>
        </div>
       </div>
    </div>
    <div class="col-md-3">
       <div class="panel panel-box clearfix">
         <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">  </h2>
          <?php $products_count = DB::table('products')->count(); ?>
          <h2>{{ $products_count ?? '0' }}</h2>
          <p class="text-muted">Productos</p>
        </div>
       </div>
    </div>
</div>
<h1 style="text-align:center; font-size:50px;"> BIENVENIDO A </h1>
<center>
<img src="images/logo.png" style="width:500px; height:300px;  ">
</center>
@endsection
