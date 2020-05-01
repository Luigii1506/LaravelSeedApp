@extends('layouts.app')
  
  @section('content')
  <div class="container">
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>AGREGAR PEDIDO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
            </div>
        </div>
    </div>
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('pedidos.guardar', $id) }}" method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="Dirección" autocomplete="off">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input name="fecha" class="timepicker form-control" type="text" autocomplete="off"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora:</strong>
                    <input type="text" name="hora" class="form-control" placeholder="Hora" autocomplete="off"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div> 
@endsection