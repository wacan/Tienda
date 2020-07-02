@extends('layouts.admin')

@section('content')

@if(session('flash'))
  <div class="alert alert-success">{{session('flash')}}</div>
@endif
<div class="row">
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar categoría</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="/categorie" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombre de la categoría" required>
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Agregar categoría</button>
        </form>
        </div>
      </div>
    </div>

    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de categorías</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center">Categorías</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
             @foreach($categorie as $categories) 
                <tr>
                    <td class="text-center">{{$categories->id}}</td>
                    <td class="text-center">{{$categories->cat_name}}</td>
                    <td class="text-center">
                    @include('categorias.modalCategory-edit')
                      <form method="POST" action="{{route('categorie.destroy', $categories->id)}}">                          
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar este usuario?')">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </form>
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
@endsection