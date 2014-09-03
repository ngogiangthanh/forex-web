<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
 */
/**
 * Trang khách hàng
 */
//Trang chủ
Route::get('',array('as' => '', 'uses' => 'GuestController@index'));
//Các trang còn lại
Route::get('{type}','GuestController@index')->where(array('type' => '[A-Za-z0-9]+'));
//Xem chi tiết
Route::get('{type}/{id}','GuestController@show')->where(array('type' => '[A-Za-z0-9]+','id' => '[0-9]+'));
//Gửi liên hệ
Route::post('sendcontact','GuestController@store'); 

/**
 * Trang quản lý
 */
Route::get('admin/{alias}', 'AdminController@index')->where(array('alias'=>'[A-Za-z0-9]+'));