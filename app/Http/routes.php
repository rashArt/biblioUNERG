<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login',
    [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'login'
    ]
);

Route::post('/login',
    [
        'uses' => 'Auth\AuthController@postLogin',
        'as' => 'login'
    ]
);

Route::get('/logout',
    [
        'uses' => 'Auth\AuthController@getLogout',
        'as' => 'logout'
    ]
);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return redirect('principal');
    });

    Route::get('/principal',
        [
            'uses' => 'DashboardController@principal',
            'as' => 'principal'
        ]
    );

    /* AREAS */
        Route::resource('areas', 'AreaController');

        Route::get('areas/{id}/delete','AreaController@delete');

    /* CARGOS */
        Route::resource('cargos', 'CargoController');

        Route::get('cargos/{id}/delete','CargoController@delete');

    /* ESPECIALIDADES */
        Route::resource('especialidades', 'EspecialidadController');

        Route::get('especialidades/{id}/delete','EspecialidadController@delete');

    /* TESIS */
        Route::resource('grados', 'GradoController');

        Route::get('grados/{id}/delete','GradoController@delete');

    /* LIBROS */
        Route::resource('libros', 'LibroController');

        Route::get('libros/{id}/delete','LibroController@delete');

    /* USER */
        Route::resource('users', 'UserController');

        Route::get('users/{id}/delete','UserController@delete');


});
