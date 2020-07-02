<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditCategory-{{$categories->id}}" style="float:left">
<i class="fas fa-edit"></i>
</button>

{!! Form::open(['action' => ['CategoryController@update', $categories->id], 'method' => 'PATCH']) !!}
{{Form::token()}}
<div class="modal fade" id="EditCategory-{{$categories->id}}" tabindrol="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h class="modal-title" id="exampleModalLabel">Editar grupo de usuarios</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('categorie.update', $categories->id)}}" method="POST">
        @method('PATCH')
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre de la categoria:</label>
            <input type="text" name="category" class="form-control" id="recipient-name" value="{{$categories->cat_name}}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}