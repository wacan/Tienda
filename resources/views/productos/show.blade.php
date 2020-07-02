@extends('layouts.admin')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="form-group">
          <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">{{$product->pro_name}}</h1>
                    <p class="lead">{{$product->pro_descripcion}}</p>
                    <p class="lead">en stock actualmente hay {{$product->stock}} productos disponibles</p>
                    <p class="lead">el costo para la venta es de $ {{$product->pro_price}}</p>
                </div>
                <div class="col-md-6">
                    @if($product->pro_image !="")
                        <img src="{{asset('image/'.$product->pro_image)}}" alt="{{$product->pro_image}}" style="width:280px;" height="250px">
                    @endif
                </div>
            </div>
        </div>
    </div> 
    <button type="button" onclick="location='{{ url('/product') }}'" class="btn btn-success">Volver</button>
</div>
@endsection