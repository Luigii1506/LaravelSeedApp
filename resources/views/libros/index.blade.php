@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" data-aos="fade-left" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body" >
            <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Fecha de publicacion</th>
                    <th>Editorial</th>
                    <th>Genero</th>
                    <th>Precio</th>
                </tr>
                </thead>
                <!--
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                -->
                <tbody>
                @foreach($libros as $libro)   
                <tr href="{{ route('libros.show',$libro->id) }}"> 
                       <td>{{$libro->titulo}}</td>
                       <td>{{$libro->autor}}</td>
                       <td>{{$libro->fecha_publicacion}}</td>
                       <td>{{$libro->editorial}}</td>
                       <td>{{$libro->genero}}</td>
                       <td>{{$libro->precio}}</td>
                </tr>
                @endforeach

  

               
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@can('administrar libros') 
<div class="btn-group-fab" role="group" aria-label="FAB Menu">
    <div>
        <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Menu"> <i class="fa fa-bars"></i> </button>
        <a class="btn btn-sub btn-info has-tooltip" data-placement="left" title="Fullscreen" href="{{ route('libros.create') }}"> <i class="fa fa-plus icon-fix "></i> </a> 
        <button type="button" class="btn btn-sub btn-danger has-tooltip" data-placement="left" title="Save"> <i class="fa fa-floppy-o"></i> </button>
        <a class="btn btn-sub btn-warning has-tooltip" data-placement="left" title="Download" href="{{ route('libros.export') }}"> <i class="fa fa-download"></i> </a>
    </div>
</div>
@endcan
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hola
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
