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
Route::get('{type}/{alias}','GuestController@indexModify')->where(array('type' => '[A-Za-z0-9]+', 'alias' => '[A-Za-z0-9_]+')); 
//Xem chi tiết
Route::get('{type}/{alias}/{id}', 'GuestController@show')->where(array('type' => '[A-Za-z0-9]+','alias' => '[A-Za-z0-9_]+','id' => '[0-9]+'));
//Xem chi tiết các loại khác
Route::get('{type}/threads={id}', 'GuestController@showOthers')->where(array('type' => '[A-Za-z0-9]+','id' => '[0-9]+'));
//Gửi liên hệ
Route::post('sendcontact', 'GuestController@store');
//Tìm kiếm
Route::get('search={key}', 'GuestController@search');

/**
 * Trang quản lý
 */
Route::get('admin/{alias}', 'AdminController@index')->where(array('alias' => '[A-Za-z0-9]+'));
/**
 * Trang login
 */
Route::post('login', function() {
    $rules = array(
        'username' => 'required',
        'password' => 'required'
    );
    $validation = Validator::make(Input::all(), $rules);
    if ($validation->passes()) {
        $username = trim(Input::get('username'));
        $password = Input::get('password');
        $user = DB::table('user')->where('username', $username)->first();
        if (isset($user)) {
            if ($user->password == md5($password)) { // If their password is still MD5
                $user->password = Hash::make($password); // Convert to new format
                return Redirect::to('admin');
            } else {
                return Redirect::to('login')
                                ->with('flash_error', 'Sai mật khẩu.')
                                ->withInput()
                                ->withErrors($validation);
            }
        } else {
            return Redirect::to('login')
                            ->with('flash_error', 'Tên người dùng và mật khẩu không hợp lệ.')
                            ->withInput()
                            ->withErrors($validation);
        }
    }
    return Redirect::to('login')
                    ->with('flash_error', 'Tên người dùng và mật khẩu không hợp lệ.')
                    ->withInput()
                    ->withErrors($validation);
});
Route::group(array('before' => 'auth'), function() {
    if (Auth::check()) {
        switch (Auth::user()->getRole()) {
            case 'admin':
                Route::controller('/', 'AdminController');
                Route::controller('/', 'HethongController');
                break;
            case 'guest':
                Route::controller('/', 'GuestController');
                break;
            default:
                break;
        }
    }
    // Route cho trang chủ và logout
    Route::controller('/', 'HomeController');
});
