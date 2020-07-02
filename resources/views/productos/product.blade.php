@extends('layouts.admin')

@section('content')
@if(session('flash'))
  <div class="alert alert-success">{{session('flash')}}</div>
@endif
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">

          <!-- SEARCH FORM -->
          <form class="form-inline ml-12">
            <div>
            <label for="">Escriba el nombre del producto:</label>   
            </div>          
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search"
                 aria-label="Search">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
          </form>

         <div class="pull-right">
         @include('productos.modal')
         </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th class="text-center"> Imagen</th>
                <th class="text-center"> Nombre del producto </th>
                <th class="text-center"> Descripción </th>
                <th class="text-center" style="width: 10%;"> Stock </th>
                <th class="text-center" style="width: 10%;"> Precio de venta </th>
                <th class="text-center" style="width: 10%;"> Agregado </th>
                <th class="text-center" style="width: 130px;"> Acciones </th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td class="text-center">{{$product->id}}</td>
                <td class="text-center">
                  <img src="image/{{$product->pro_image}}" class="img-thumbnail" style="width:150px; height:115px;">
                </td>
                <td>{{$product->pro_name}}</td>
                <td>{{$product->pro_descripcion}}</td>
                <td class="text-center">{{$product->stock}}</td>
                <td class="text-center">{{$product->pro_price}}</td>
                <td class="text-center">{{$product->created_at}}</td>
                <td class="text-center">
                @include('productos.modal-edit')
           <form method="POST" action="{{route('product.destroy', $product->id)}}">             
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar este rol?')">
                  <i class="far fa-trash-alt"></i>
                </button>
                <button onclick= "location='{{route('product.show', $product->id)}}'" type="button" class="btn btn-info btn-sm">
                    <i class="far fa-eye"></i>
                  </button>  
            </form>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
          {{$products->links()}}
        </div>
      </div>
    </div>
  </div>
@endsection