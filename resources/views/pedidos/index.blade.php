@extends('layouts.app')

@section('content')

@foreach($pedidos as $pedido)  
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 col-lg-5">
                                <img src="https://image.isu.pub/190709114841-75c18df4b43e5560091855a9c2c1b5ee/jpg/page_1.jpg" class="img-book-pedidos"/>
                            </div>

                            <div class="col-12 col-lg-7 col-pedidos-text">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-12">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 pedidos-book-title">Mitos sumerios y acadios</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800 pedidos-book-price">$40,000</div>   
                                        <div class="mt-2">04/may/2019</div> 
                                        <div class="">3:15 P.M</div>
                                        <div class="font-weight-bold mt-1">Calle Ignacio Zaragoza 8163, Zona Centro, 22000 Tijuana, B.C.</div> 
                                    </div>
                                </div>                        
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 col-lg-5">
                                <img src="https://image.isu.pub/190709114841-75c18df4b43e5560091855a9c2c1b5ee/jpg/page_1.jpg" class="img-book-pedidos"/>
                            </div>

                            <div class="col-12 col-lg-7 col-pedidos-text">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-12">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 pedidos-book-title">Mitos sumerios y acadios</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800 pedidos-book-price">$40,000</div>
                                        <div class="mt-2">04/may/2019</div> 
                                        <div class="">3:15 P.M</div> 
                                        <div class="font-weight-bold mt-1">Calle Ignacio Zaragoza 8163, Zona Centro, 22000 Tijuana, B.C.</div> 
                                    </div>
                                </div>                        
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
