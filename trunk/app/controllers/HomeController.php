<?php

class HomeController extends BaseController {

    public function getIndex() {
        $role = Auth::user()->getRole();
        if (isset($role) && trim($role)!==''){
            return View::make(Auth::user()->getRole() . '.index');
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
    public static function getDetails() {
        $tintuc['noidung'] = $data = TinTuc::SelectTinTuc();
        $tintuc['phantrang'] = $data->links();
        if(Request::ajax())
        {
           $html = View::make("guest.test",$tintuc)->render();
            return Response::json(array('html'=>$html));
        }
   //     return View::make("guest.index",$data)->with('title','title');
    }
}
