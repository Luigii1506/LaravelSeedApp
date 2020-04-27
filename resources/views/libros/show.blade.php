@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 center-div">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary libro-titulo-card">{{ $libro->titulo    }}</h6>
                  @can('administrar libros') 
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(17px, 19px, 0px);">
                            <form action="{{ route('libros.destroy',$libro->id) }}" method="POST" id="deleteForm">  
                                <div class="dropdown-header">Dropdown Header:</div>
                            
                                <a class="dropdown-item" id="deleteTag">Delete</a>
                                
                                <a class="dropdown-item" href="{{ route('libros.edit',$libro->id) }}">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                                @csrf
                    @method('DELETE')
                            </form>
                        </div>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="libro-img-wrapper">
                        <img src="{{ $libro->imagen }}" class="center-div libro-show-img">
                    </div>
                    <div class="h5 font-weight-bold text-gray-800 libro-precio-card text-center"><span class="price-tag">$</span> {{ $libro->precio }}</div>
                    <div class="libro-text-wrapper">
                        <div><span class="font-weight-bold">Autor:</span> {{ $libro->autor }}</div>
                        <div><span class="font-weight-bold">Editorial:</span> {{ $libro->editorial }}</div>
                        <div><span class="font-weight-bold">Fecha publicacion:</span> {{ $libro->fecha_publicacion }}</div>
                        <div><span class="font-weight-bold">Num. páginas:</span> {{ $libro->paginas }}</div>
                        <div><span class="font-weight-bold">Sinopsis:</span> {{ $libro->resumen }}</div>

                    </div>
                    
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>  


</div>
   
@endsection