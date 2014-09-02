<?php

class HomeController extends BaseController {

    public function getIndex() {
        $role = Auth::user()->getRole();
        if (isset($role) && trim($role)!==''){
            return View::make(Auth::user()->getRole() . '.home');
        }
        return View::make('errors.nouser');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('login')
                        ->with('flash_notice', 'Bạn đã đăng xuất thành công.');
    }

    public function missingMethod($parameters = array())
    {
        return Redirect::to('/');
    }

}
