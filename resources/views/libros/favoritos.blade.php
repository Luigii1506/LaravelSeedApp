@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
    @foreach($favoritos as $favorito)   

        <div class="col-xs-12 col-sm-4 center-div">
            <a href="{{ route('libros.show',$favorito->id) }}" class="a-favorite">
                <div class="card shadow mb-4" >
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary libro-titulo-card-favorite">{{ $favorito->titulo }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="libro-img-wrapper">
                            <img src="{{ $favorito->imagen }}" class="center-div libro-show-img-favorite">
                        </div>
                        <div class="">
                            <div><span class="font-weight-bold">Autor:</span> {{ $favorito->autor }}</div>
                            <div><span class="font-weight-bold">Editorial:</span> {{ $favorito->editorial }}</div>
                            <div><span class="font-weight-bold">Fecha publicacion:</span> {{ $favorito->fecha_publicacion }}</div>
                            <div><span class="font-weight-bold">Num. páginas:</span> {{ $favorito->paginas }}</div>

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
            </a>
           
        </div>
    @endforeach

        
    </div>  


</div>
    

@endsection
