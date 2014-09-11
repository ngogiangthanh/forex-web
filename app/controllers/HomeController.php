<?php

class HomeController extends BaseController {

    public function getLogout() {
        Auth::logout();
        return Redirect::to('login')
                        ->with('message_logout', 'Bạn đã đăng xuất thành công!');
    }

    public function missingMethod($parameters = array()) {
        return Redirect::to('/');
    }

    public function authenticate() {
        $data = array(
            "username" => Input::get("username"),
            "password" => Input::get("password")
        );
        //
        $auth = new User();
        if ($auth->Authenticate($data)) {
            if (Auth::attempt($data)) {
                        return Redirect::to('/')
                                ->with('message_login_success', 'Đăng nhập thành công!');
            } else {
                return Redirect::to('login')
                                ->withInput()
                                ->with('message_error', 'Mật khẩu không chính xác!');
            }
        } else {
            return Redirect::to('login')
                            ->withInput()
                            ->with('message_error', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
    }

}
