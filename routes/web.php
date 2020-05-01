<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros/exportar', 'LibroController@exportData')->name('libros.export');

Route::get('/libros/favoritos', 'LibroController@getFavoritos')->name('libros.favoritos');

Route::get('/libros/agregar-favorito/{id}', 'LibroController@addToFavorite')->name('libro.favoritos');

Route::resource('libros','LibroController');

Route::get('pedidos/crear/{id}','PedidoController@create')->name('pedidos.crear');

Route::post('pedidos/guardar/{id}','PedidoController@store')->name('pedidos.guardar');

Route::resource('pedidos','PedidoController');

Auth::routes(['verify' => true]);

Route::resource('products','ProductController');

Route::get('admin/home', 'AdminController@index')->name('admin.home');

Route::get('admin/home/giveRole', 'AdminController@giveRoleToUser')->name('admin.giveRole');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mapa', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    app('map')->initialize($config);


    $marker = array();
    app('map')->add_marker($marker);

    $map = app('map')->create_map();
    echo "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
});


