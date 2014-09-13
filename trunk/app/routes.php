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
Route::get('', array('as' => '', 'uses' => 'GuestController@index'));
//Các trang còn lại
Route::get('{type}', 'GuestController@index')->where(array('type' => '[A-Za-z0-9]+'));
//Chiến lược
//Chiến lược - forex
//chiến lược - vàng
// + kim loại quý
// + hàng hóa
// + cổ phiếu
Route::get('{type}/{alias}', 'GuestController@indexModify')->where(array('type' => '[A-Za-z0-9]+', 'alias' => '[A-Za-z0-9_]+'));
//Xem chi tiết
Route::get('{type}/{alias}/{id}', 'GuestController@show')->where(array('type' => '[A-Za-z0-9]+', 'alias' => '[A-Za-z0-9_]+', 'id' => '[0-9]+'));
//Xem chi tiết các loại khác
Route::get('{type}/threads={id}', 'GuestController@showOthers')->where(array('type' => '[A-Za-z0-9]+', 'id' => '[0-9]+'));
//Gửi liên hệ
Route::post('sendcontact', 'GuestController@store');
//Tìm kiếm
Route::get('search={key}', 'GuestController@search');
/**
 * Trang login
 */
Route::group(array('before' => 'guest'), function() {
    Route::post('login', array('before' => 'csrf', 'uses' => 'HomeController@authenticate'));
});
//
Route::group(array('before' => 'auth'), function() {
        /**
         * Trang quản lý
         */
        Route::get('admin/ql={type}', 'AdminController@index')->where(array('type' => '[&A-Za-z0-9]+'));
        Route::get('admin/ql={type}/{alias}', 'AdminController@index')->where(array('type' => '[A-Za-z0-9]+', 'alias' => '[\\-0-9]+'));
        Route::get('admin/searchbaiviet={key}/{alias}', 'AdminController@searchBaiViet')->where(array('alias' => '[\\-0-9]+'));
        Route::get('admin/searchlienhe={key}', 'AdminController@searchLienHe');
        Route::get('admin/qllienhe={id}', 'AdminController@updateQLLH')->where(array('id' => '[0-9]+'));
        //xoa
        Route::get('admin/delete={type}/{id}', 'AdminController@delete')->where(array('id' => '[0-9]+'));
        //them
        Route::get('admin/add={type}', 'AdminController@create')->where(array('type' => '[A-Za-z0-9]+'));
//sua
        Route::get('admin/edit={type}/{id}', 'AdminController@edit')->where(array('id' => '[0-9]+'));
//xem
        Route::get('admin/view=lienhe/{id}', 'AdminController@show')->where(array('id' => '[0-9]+'));
//gui email
        Route::post('admin/send=email', 'AdminController@send');
//them 
        Route::post('admin/add={type}', 'AdminController@save')->where(array('type' => '[A-Za-z0-9]+'));
//sua 
        Route::post('admin/edit={type}', 'AdminController@store')->where(array('type' => '[A-Za-z0-9]+'));
//upload hinh anh
        Route::post('upload/imgs', 'AdminController@upload');
//Đổi mật khẩu
        Route::post('admin/ql=doimatkhau', 'AdminController@changepassword');
});
