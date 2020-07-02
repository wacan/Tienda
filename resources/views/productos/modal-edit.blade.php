<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditProduct-{{$product->id}}" style="float:left">
<i class="fas fa-edit"></i>
</button>

{!! Form::open(['action' => ['ProductController@update', $product->id], 'method' => 'PATCH']) !!}
{{Form::token()}}
<div class="modal fade" id="EditProduct-{{$product->id}}" tabindrol="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h class="modal-title" id="exampleModalLabel">Editar producto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" name="name" class="form-control" id="recipient-name" value="{{$product->pro_name}}">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" id="recipient-name" value="{{$product->pro_descripcion}}">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">imagen:</label>
                <input type="file" name="imagen" class="form-control" id="recipient-name">
                @if($product->pro_image !="")
                    <img src="{{asset('image/'.$product->pro_image)}}" alt="{{$product->pro_image}}" height="50px" widht="50px">
                @endif
              </div>     
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" id="recipient-name" value="{{$product->stock}}">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Precio:</label>
                       <i class="glyphicon glyphicon-usd"></i>
                <input type="number" name="precio" class="form-control" id="recipient-name" value="{{$product->pro_price}}">
              </div>     
            </div>
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