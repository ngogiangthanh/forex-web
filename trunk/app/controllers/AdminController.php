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
            case "doimatkhau":
                return View::make('admin.profile.index')
                                ->with("title", "Profile");
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
        return Redirect::to('admin/view=lienhe/' . $id)->with('title', 'Xem chi tiết liên hệ');
    }

    public function save($type) {
//        if (get_magic_quotes_gpc()) {
//            $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
//            while (list($key, $val) = each($process)) {
//                foreach ($val as $k => $v) {
//                    unset($process[$key][$k]);
//                    if (is_array($v)) {
//                        $process[$key][stripslashes($k)] = $v;
//                        $process[] = &$process[$key][stripslashes($k)];
//                    } else {
//                        $process[$key][stripslashes($k)] = stripslashes($v);
//                    }
//                }
//            }
//            unset($process);
//        }
        switch ($type) {
            case 'lienlac':
                $data = array(
                    "address" => Input::get("tenbophan"),
                    "tel" => Input::get("sodienthoai"),
                    "fax" => Input::get("sofax"),
                    "email" => Input::get("email"),
                    "facebook" => Input::get("facebook"),
                    "link" => Input::get("urlfacebook"),
                    "vitri" => Input::get("vitri"),
                );
                Contact::InsertLL($data);
                return Redirect::to('admin/add=lienlac')->with('title', 'Thêm mới liên lạc');
            case 'baiviet':
                if (Request::ajax()) {
                    $data = array("tieude" => Input::get('tieude'),
                        "anhnho" => Input::get('anhnho'),
                        "loai" => Input::get('loai'),
                        "noidung" => preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', Input::get('noidung')));

                    TinTuc::InsertTT($data);
                    return Response::json(array('html' => true));
                } else {
                    return $this->index();
                }
            default: return $this->index();
        }
    }
function mysql_escape_mimic($inp) { 
    if(is_array($inp)) 
        return array_map(__METHOD__, $inp); 

    if(!empty($inp) && is_string($inp)) { 
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a","&"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z',"\\&"), $inp); 
    } 

    return $inp; 
}

    public function upload() {
        if (isset($_FILES['upload'])) {
            //       ------Process your file upload code -------
            $file = Input::file('upload');
            $input = array('image' => $file);
            $rules = array(
                'image' => 'image'
            );
            $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction(1, '', 'Vui lòng chọn tệp hình ảnh!');</script>";
            } else {
                $destinationPath = 'uploads/';
                $filename = md5($file->getClientOriginalName()) . "." . $file->getClientOriginalExtension();
                Input::file('upload')->move($destinationPath, $filename);
                //   return Response::json(array('html' => $destinationPath . $filename));
                $url = url('/') . "/" . $destinationPath . $filename;
                $funcNum = Input::get('CKEditorFuncNum');
                // Optional: instance name (might be used to load a specific configuration file or anything else).
                //  $CKEditor = Input::get('CKEditor');
                // Optional: might be used to provide localized messages.
                //  $langCode = Input::get('langCode');
                // Usually you will only assign something here if the file could not be uploaded.
                $message = '';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
            }
        }
    }

}
