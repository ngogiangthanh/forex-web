<?php

class AdminController extends BaseController {

    private $perpage = 10;

    public function index($type = "", $alias = "") {
        switch ($type) {
            case "baiviet":
                $currentpage = 1;
                if (Input::has('page') && Input::get('page') > 0) {
                    $currentpage = Input::get('page');
                }
                if ($alias == "") {
                    $alias = -1;
                }
                $threads = TinTuc::Select($alias, $this->perpage, null);
                return View::make('admin.threads.index')
                                ->with("threads", $threads)
                                ->with('currentpage', $currentpage)
                                ->with('perpage', $this->perpage)
                                ->with("type", $alias)
                                ->with("title", "Quản lý các bài viết");
            case "lienhe":
                $lienhe = LienHe::Select(null, $this->perpage);
                $currentpage = 1;
                if (Input::has('page') && Input::get('page') > 0) {
                    $currentpage = Input::get('page');
                }
                return View::make('admin.contacts.index')
                                ->with("lienhe", $lienhe)
                                ->with('currentpage', $currentpage)
                                ->with('perpage', $this->perpage)
                                ->with("title", "Quản lý liên hệ");
            case "lienlac":
                $lienlac = Contact::Select(-1);
                return View::make('admin.lienlac.index')
                                ->with("lienlac", $lienlac)
                                ->with("title", "Quản lý liên lạc");
            case "login":
                return View::make('admin.login')
                                ->with("title", "Login");
            default:
                return View::make('admin.index')
                                ->with("title", "Trang chủ quản lý");
        }
    }

    public function searchBaiViet($key, $type) {
        $key = preg_replace('/\s\s+/', ' ', trim($key));
        if ($key != null || $key == "") {
            $currentpage = 1;
            if (Input::has('page')) {
                $currentpage = Input::get('page');
            }
            $threads = TinTuc::Select($type, $this->perpage, $key);
            return View::make('admin.threads.index')
                            ->with("threads", $threads)
                            ->with('currentpage', $currentpage)
                            ->with('perpage', $this->perpage)
                            ->with("key", $key)
                            ->with("type", $type)
                            ->with("title", "Quản lý các bài viết");
        } else {
            return $this->index("baiviet");
        }
    }

    public function searchLienHe($key) {
        $key = preg_replace('/\s\s+/', ' ', trim($key));
        if ($key != null || $key == "") {
            $currentpage = 1;
            if (Input::has('page') && Input::get('page') > 0) {
                $currentpage = Input::get('page');
            }
            $lienhe = LienHe::Select(null, $this->perpage, $key);
            return View::make('admin.contacts.index')
                            ->with("lienhe", $lienhe)
                            ->with('currentpage', $currentpage)
                            ->with('perpage', $this->perpage)
                            ->with("key", $key)
                            ->with("title", "Quản lý các liên hệ");
        } else {
            return $this->index("baiviet");
        }
    }

    public function updateQLLH($id) {
        if (Request::ajax()) {
            $result = LienHe::UpdateTT($id);
            if ($result) {
                return Response::json(array('html' => date("h:i A | d/m/Y", time())));
            }
            return Response::json(array('html' => ""));
        }
    }

    public function delete($type, $id) {
        switch ($type) {
            case 'lienlac':
                if (Request::ajax()) {
                    Contact::DeleteCT($id);
                    return Response::json(array('html' => true));
                }
                break;
            case 'lienhe':
                if (Request::ajax()) {
                    LienHe::DeleteLH($id);
                    return Response::json(array('html' => true));
                }
                break;
            case 'baiviet':
                if (Request::ajax()) {
                    TinTuc::DeleteTT($id);
                    return Response::json(array('html' => true));
                }
                break;
        }
    }

    public function create($type) {
        switch ($type) {
            case 'lienlac':
                return View::make('admin.lienlac.add')
                                ->with("title", "Thêm mới liên lạc");
            case 'baiviet':
                return View::make('admin.threads.add')
                                ->with("title", "Thêm mới bài viết");
            default: return $this->index();
        }
    }

    public function show($id) {
        $row = LienHe::Select($id);
        return View::make('admin.contacts.view')
                        ->with('row', $row)
                        ->with("title", "Xem chi tiết liên hệ");
    }

    public function edit($type, $id) {
        switch ($type) {
            case 'lienlac':
                return View::make('admin.lienlac.edit')
                                ->with("title", "Chỉnh sửa liên lạc");
            case 'baiviet':
                return View::make('admin.threads.edit')
                                ->with("title", "Chỉnh sửa bài viết");
            default: return $this->index();
        }
    }

    public function send() {
        $id = Input::get('id');
        $tieudetraloi = Input::get('tieudetraloi');
        $noidungtraloi = Input::get('noidungtraloi');
        $trangthai = Input::get('xuly');
        LienHe::UpdatePH($id, $tieudetraloi, $noidungtraloi, $trangthai);
        $data = array('hoten' => Input::get("hoten"),
            "noidung" => $noidungtraloi);
        Mail::send('admin.contacts.mail', $data, function($message) {
            $message->to($email = Input::get("email"), Input::get("hoten"))->subject(Input::get('tieudetraloi'));
        });
        return Redirect::to('admin/view=lienhe/' . $id)->with('title', 'Thanks for registering!');
    }

}
