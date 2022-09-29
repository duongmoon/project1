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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'Admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);
    Route::get('update/{username}', [
        'uses' => 'AdminController@edit',
        'as' => 'Admin.edit'
    ]);

    Route::post('update/{username}', [
        'uses' => 'AdminController@update',
        'as' => 'Admin.update'
    ]);
});

Route::group(['prefix' => 'Cus'], function () {
    Route::get('', [
        'uses' => 'CusController@index',
        'as' => 'Cus.index'
    ]);
    Route::get('update/{cusid}', [
        'uses' => 'CusController@edit',
        'as' => 'Cus.edit'
    ]);

    Route::post('update/{cusid}', [
        'uses' => 'CusController@update',
        'as' => 'Cus.update'
    ]);

});

Route::group(['prefix' => 'Model'], function () {
    Route::get('', [
        'uses' => 'CategoryController@index',
        'as' => 'Model.index'
    ]);

    Route::get('create', [
        'uses' => 'CategoryController@create',
        'as' => 'Model.create'
    ]);

    Route::post('create', [
        'uses' => 'CategoryController@store',
        'as' => 'Model.store'
    ]);

    Route::get('update/{modelid}', [
        'uses' => 'CategoryController@edit',
        'as' => 'Model.edit'
    ]);

    Route::post('update/{modelid}', [
        'uses' => 'CategoryController@update',
        'as' => 'Model.update'
    ]);

    Route::get('delete/{modelid}', [
        'uses' => 'CategoryController@confirm',
        'as' => 'Model.confirm'
    ]);
    Route::post('delete/{modelid}', [
        'uses' => 'CategoryController@destroy',
        'as' => 'Model.destroy'
    ]);
});

Route::group(['prefix' => 'Car'], function () {
    Route::get('', [
        'uses' => 'CarController@index',
        'as' => 'Car.index'
    ]);

    Route::get('show/{carid}',[
        'uses' => 'CarController@show',
        'as' => 'Car.show'
    ]);

    Route::get('create', [
        'uses' => 'CarController@create',
        'as' => 'Car.create'
    ]);

    Route::post('create', [
        'uses' => 'CarController@store',
        'as' => 'Car.store'
    ]);

    Route::get('update/{carid}', [
        'uses' => 'CarController@edit',
        'as' => 'Car.edit'
    ]);

    Route::post('update/{carid}', [
        'uses' => 'CarController@update',
        'as' => 'Car.update'
    ]);

    Route::get('delete/{carid}', [
        'uses' => 'CarController@confirm',
        'as' => 'Car.confirm'
    ]);
    Route::post('delete/{carid}', [
        'uses' => 'CarController@destroy',
        'as' => 'Car.destroy'
    ]);

});

Route::group(['prefix' => '/'], function (){
    Route::get('login',[
        'uses' => 'SignController@login',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'SignController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'SignController@signout',
        'as' => 'auth.signout'
    ]);
    Route::get('home',[
        'uses' => 'NormalController@home',
        'as' => 'auth.home'
    ]);
    Route::get('CategoryView',[
        'uses'=>'NormalController@Categoryview',
        'as'=>'View.Category'
    ]);
    Route::get('CarWithModel/{modelid}',[
        'uses'=>'NormalController@CarWithModel',
        'as'=>'Car.Model'
    ]);
});

Route::group(['prefix' => 'client'], function (){
    Route::get('home',[
        'uses' => 'NormalController@home',
        'as' => 'auth.home'
    ]);
    Route::get('CategoryView',[
        'uses'=>'NormalController@Categoryview',
        'as'=>'View.Category'
    ]);
    Route::get('CarWithModel/{modelid}',[
        'uses'=>'NormalController@CarWithModel',
        'as'=>'Car.Model'
    ]);
    Route::get('search',[
        'uses' => 'NormalController@search',
        'as' => 'Client.search'
    ]);
    Route::get('signup',[
        'uses' => 'NormalController@signup',
        'as' => 'Client.signup'
    ]);

    Route::post('signup',[
        'uses' => 'NormalController@store',
        'as'=>'Client.store'
    ]);

    Route::get('Cardetail/{carid}',[
        'uses' => 'NormalController@Cardetail',
        'as' => 'Client.Cardetail'
    ]);
    Route::get('OrderCar',[
        'uses' => 'NormalController@order',
        'as'=>'Client.Order'
    ]);

    Route::get('about',[
        'uses' => 'NormalController@about',
        'as' => 'Client.About'
    ]);

//    Route::get('contact',[
//        'uses' => 'NormalController@contact',
//        'as' => 'Client.Contact'
//    ]);
    Route::get('Car',[
        'uses' => 'NormalController@car',
        'as' => 'Client.Car'
    ]);
});
