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
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input data-toggle="datetimepicker" name="datetime" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div> 
@endsection