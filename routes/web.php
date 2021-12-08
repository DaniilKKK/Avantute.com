<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', 'TourController@index');

Route::get('/account', function () {
    return view('/account');
})->middleware('auth');

Route::get('/tours', 'TourController@index');
Route::get('/showban', 'TourController@showban');
Route::post('/tours', 'TourController@filter');
Route::get('/tours/{tour}', 'TourController@card');
Route::get('/card/{tour}', 'TourController@cardOrder');
Route::post('/tours/{tour}', 'TourController@order')->name('tours.order')->middleware('auth');


Route::middleware(['auth', 'is_client'])->group(function () {
    Route::get('/client/orders', 'ClientController@orders');
});

Route::middleware(['auth', 'is_manager_or_admin'])->group(function () {
    Route::get('/admin/orders', 'AdminController@orders');
    Route::get('/admin/orders/{order}', 'AdminController@showOrderUpdateForm');
    Route::put('/admin/orders/{order}', 'AdminController@orderUpdate');
    Route::delete('/admin/orders/{order}', 'AdminController@orderDestroy')->name('orders.destroy');

    Route::get('/admin/tours', 'AdminController@toursAdmin');
    Route::get('/admin/tours/{tour}', 'TourController@showTourUpdateForm');
    Route::put('/admin/tours/{tour}', 'TourController@update');
    Route::delete('/admin/tours/{tour}', 'TourController@destroy')->name('tours.destroy');
});


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/orders');
    });

    Route::get('/admin/users', 'AdminController@users');
    Route::get('/admin/services', 'AdminController@services');
    Route::get('/admin/countries', 'AdminController@countries');
    Route::get('/admin/cities', 'AdminController@cities');
    Route::get('/admin/vehicles', 'AdminController@vehicles');

    Route::post('/admin/users/{user}', 'AdminController@ban');
    Route::put('/admin/users/{user}', 'AdminController@userUpdate');
    Route::get('/admin/users/{user}', 'AdminController@showUserUpdateForm');
    Route::delete('/admin/users/{user}', 'AdminController@userDestroy')->name('users.destroy');

    Route::get('/admin/addTour', 'AdminController@showTourForm');
    Route::post('/admin/addTour', 'AdminController@addTour')->name('tours.add');

    Route::put('/admin/services/{service}', 'AdminServiceController@update');
    Route::delete('/admin/services/{service}', 'AdminServiceController@destroy')->name('services.destroy');
    Route::get('/admin/services/{service}', 'AdminServiceController@showServiceUpdateForm');
    Route::get('/admin/addService', 'AdminServiceController@showServiceForm');
    Route::post('/admin/addService', 'AdminServiceController@addService');

    Route::put('/admin/countries/{country}', 'AdminCountryController@update');
    Route::delete('/admin/countries/{country}', 'AdminCountryController@destroy')->name('countries.destroy');
    Route::get('/admin/countries/{country}', 'AdminCountryController@showCountryUpdateForm');
    Route::get('/admin/addCountry', 'AdminCountryController@showCountryForm');
    Route::post('/admin/addCountry', 'AdminCountryController@addCountry');

    Route::get('/admin/addCity', 'AdminCityController@showCityForm');
    Route::post('/admin/addCity', 'AdminCityController@addCity');
    Route::delete('/admin/cities/{city}', 'AdminCityController@destroy')->name('cities.destroy');

    Route::put('/admin/cities/{city}', 'AdminCityController@update');
    Route::get('/admin/cities/{city}', 'AdminCityController@showCityUpdateForm');

    Route::get('/admin/addVehicle', 'AdminVehicleController@showVehicleForm');
    Route::post('/admin/addVehicle', 'AdminVehicleController@addVehicle');
    Route::delete('/admin/vehicles/{vehicle}', 'AdminVehicleController@destroy')->name('vehicles.destroy');

    Route::put('/admin/vehicles/{vehicle}', 'AdminVehicleController@update');
    Route::get('/admin/vehicles/{vehicle}', 'AdminVehicleController@showVehicleUpdateForm');
});