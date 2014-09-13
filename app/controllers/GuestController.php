<?php

class GuestController extends BaseController {

    private $perpage = 3; //so luong ban tin tren mot trang

    public function index($type = "") {
        $contacts = Contact::Select();
        switch ($type) {
            case "news":
                $newsTNs = TinTuc::Select(6, $this->perpage);

                //ajax pagingation tin tức trong nước
                $tinTN['noidung'] = $newsTNs;
                $tinTN['phantrang'] = $newsTNs->links();
                if (Request::ajax() && Input::get("type") == "tin_tn") {
                    $html = View::make("guest.news.ajaxpagination_tn", $tinTN)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation tin tức trong nước

                $newsNNs = TinTuc::Select(7, $this->perpage);
                //ajax pagingation tin tức ngoài nước
                $tinNN['noidung'] = $newsNNs;
                $tinNN['phantrang'] = $newsNNs->links();
                if (Request::ajax() && Input::get("type") == "tin_nn") {
                    $html = View::make("guest.news.ajaxpagination_nn", $tinNN)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation tin tức ngoài nước

                return View::make('guest.news.index')
                                ->with('contacts', $contacts)
                                ->with('newsTNs', $newsTNs)
                                ->with('newsNNs', $newsNNs)
                                ->with("title", "Các tin tức trong nước và ngoài nước");
            case "chienluoc":
                //chiến lược forex
                //chien luọc vàng 
                //- kim loại quý
                //- hàng hóa
                //- cổ phiếu
                $forex = TinTuc::Select(1, $this->perpage);
                //ajax pagingation forex
                $tintuc['noidung'] = $forex;
                $tintuc['phantrang'] = $forex->links();
                if (Request::ajax() && Input::get("type") == "forex") {
                    $html = View::make("guest.chienluoc.forex.ajaxpagination", $tintuc)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation forex

                $kimloaiquy = TinTuc::Select(2, $this->perpage);
                //ajax pagingation kim loai quy
                $klq['noidung'] = $kimloaiquy;
                $klq['phantrang'] = $kimloaiquy->links();
                if (Request::ajax() && Input::get("type") == "kimloaiquy") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_klq", $klq)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination kim loai quy

                $hanghoa = TinTuc::Select(3, $this->perpage);
                //ajax pagingation hang hoa
                $hh['noidung'] = $hanghoa;
                $hh['phantrang'] = $hanghoa->links();
                if (Request::ajax() && Input::get("type") == "hanghoa") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_hh", $hh)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation hang hoa

                $cophieu = TinTuc::Select(4, $this->perpage);
                //ajax pagingation co phieu
                $cp['noidung'] = $cophieu;
                $cp['phantrang'] = $cophieu->links();
                if (Request::ajax() && Input::get("type") == "cophieu") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_cp", $cp)->render();
                    return Response::json(array('html' => $html));
                }
                return View::make('guest.traders.chienluoc')
                                ->with('contacts', $contacts)
                                ->with('forex', $forex)
                                ->with('kimloaiquy', $kimloaiquy)
                                ->with('hanghoa', $hanghoa)
                                ->with('cophieu', $cophieu)
                                ->with("title", "Chiến lược giao dịch");
            case "sanpham":
                $sp_gd = TinTuc::Select(8, $this->perpage);
                //ajax pagingation chien luoc giao dich
                $spgd['noidung'] = $sp_gd;
                $spgd['phantrang'] = $sp_gd->links();
                if (Request::ajax() && Input::get("type") == "sp_gd") {
                    $html = View::make("guest.traders.ajaxpagination_sp", $spgd)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc giao dich
                //bv xem nhieu
                $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                //ajax pagingation bv xem nhieu
                $xemnhieu['noidung'] = $viewsthreads;
                $xemnhieu['phantrang'] = $viewsthreads->links();
                if (Request::ajax() && Input::get("type") == "xemnhieu") {
                    $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation bv xem nhieu
                return View::make('guest.traders.sanpham')
                                ->with('contacts', $contacts)
                                ->with('sp_gd', $sp_gd)
                                ->with('viewsthreads', $viewsthreads)
                                ->with("title", "Sản phẩm giao dịch");
            case "kinhnghiem":
                $kinhnghiem = TinTuc::Select(10, $this->perpage);
                //ajax pagingation kinh nghiệm giao dịch
                $kn['noidung'] = $kinhnghiem;
                $kn['phantrang'] = $kinhnghiem->links();
                if (Request::ajax() && Input::get("type") == "kinhnghiem") {
                    $html = View::make("guest.traders.ajaxpagination_kn", $kn)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc vang
                //bv xem nhieu
                $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                //ajax pagingation bv xem nhieu
                $xemnhieu['noidung'] = $viewsthreads;
                $xemnhieu['phantrang'] = $viewsthreads->links();
                if (Request::ajax() && Input::get("type") == "xemnhieu") {
                    $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation bv xem nhieu
                return View::make('guest.traders.kinhnghiem')
                                ->with('contacts', $contacts)
                                ->with('kinhnghiem', $kinhnghiem)
                                ->with('viewsthreads', $viewsthreads)
                                ->with("title", "Kinh nghiệm giao dịch");
            case "kienthuc":
                $kienthuc = TinTuc::Select(9, $this->perpage);
                //ajax pagingation kien thuc giao dich
                $kt['noidung'] = $kienthuc;
                $kt['phantrang'] = $kienthuc->links();
                if (Request::ajax() && Input::get("type") == "kienthuc") {
                    $html = View::make("guest.traders.ajaxpagination_kt", $kt)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination kien thuc giao dich
                //bv xem nhieu
                $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                //ajax pagingation bv xem nhieu
                $xemnhieu['noidung'] = $viewsthreads;
                $xemnhieu['phantrang'] = $viewsthreads->links();
                if (Request::ajax() && Input::get("type") == "xemnhieu") {
                    $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation bv xem nhieu
                return View::make('guest.traders.kienthuc')
                                ->with('contacts', $contacts)
                                ->with('kienthuc', $kienthuc)
                                ->with('viewsthreads', $viewsthreads)
                                ->with("title", "Chiến lược giao dịch");
            case "sangd":
                $sangd = TinTuc::Select(5, $this->perpage);
                //ajax pagingation sàn giao dịch
                $floortraders['noidung'] = $sangd;
                $floortraders['phantrang'] = $sangd->links();
                if (Request::ajax() && Input::get("type") == "sangd") {
                    $html = View::make("guest.floortrader.ajaxpagination", $floortraders)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation sàn giao dịch
                //bv xem nhieu
                $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                //ajax pagingation bv xem nhieu
                $xemnhieu['noidung'] = $viewsthreads;
                $xemnhieu['phantrang'] = $viewsthreads->links();
                if (Request::ajax() && Input::get("type") == "xemnhieu") {
                    $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation bv xem nhieu
                return View::make('guest.floortrader.index')
                                ->with('contacts', $contacts)
                                ->with('sangd', $sangd)
                                ->with('viewsthreads', $viewsthreads)
                                ->with("title", "Sàn giao dịch");
            case "contact":
                $supportContact = Contact::Select(1);
                return View::make('guest.contacts.index')
                                ->with('contacts', $contacts)
                                ->with("supportContact", $supportContact)
                                ->with("title", "Gửi liên hệ");
            case "login":
                if (!Auth::check()) {
                    return View::make('guest.login.index')
                                    ->with('contacts', $contacts)
                                    ->with("title", "Trang login");
                } else {
                    return $this->index();
                }
            case "logout":
                if (Auth::check()) {
                    $logout = new HomeController();
                    return $logout->getLogout();
                } else {
                    return $this->index("login"); //neu chua login
                }
            case "admin":
                if (Auth::check() && Auth::user()->roles == 1) {
                    return View::make('admin.index')
                                    ->with("title", "Trang chủ quản lý");
                } else if(Auth::check() && Auth::user()->roles != 1) {
                    return Redirect::to('/')
                            ->with('message_error', 'Vui lòng đăng nhập bằng tài khoản với nhóm quyền phù hợp!');
                }
                else{
                    return Redirect::to('login')
                            ->with('message_error', 'Vui lòng đăng nhập bằng tài khoản với nhóm quyền phù hợp!');
                }
            default:
                $forex = TinTuc::Select(1, $this->perpage);
                //ajax pagingation forex
                $tintuc['noidung'] = $forex;
                $tintuc['phantrang'] = $forex->links();
                if (Request::ajax() && Input::get("type") == "forex") {
                    $html = View::make("guest.chienluoc.forex.ajaxpagination", $tintuc)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation forex

                $kimloaiquy = TinTuc::Select(2, $this->perpage);
                //ajax pagingation kim loai quy
                $klq['noidung'] = $kimloaiquy;
                $klq['phantrang'] = $kimloaiquy->links();
                if (Request::ajax() && Input::get("type") == "kimloaiquy") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_klq", $klq)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination kim loai quy

                $hanghoa = TinTuc::Select(3, $this->perpage);
                //ajax pagingation hang hoa
                $hh['noidung'] = $hanghoa;
                $hh['phantrang'] = $hanghoa->links();
                if (Request::ajax() && Input::get("type") == "hanghoa") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_hh", $hh)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation hang hoa

                $cophieu = TinTuc::Select(4, $this->perpage);
                //ajax pagingation co phieu
                $cp['noidung'] = $cophieu;
                $cp['phantrang'] = $cophieu->links();
                if (Request::ajax() && Input::get("type") == "cophieu") {
                    $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_cp", $cp)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation co phieu
                $chienLuoc = TinTuc::Select(0);

                //bv moi nhat
                $newthreads = TinTuc::SelectRelate("new", "", null, 5);
                //ajax pagingation bv moi nhat
                $bvm['noidung'] = $newthreads;
                $bvm['phantrang'] = $newthreads->links();
                if (Request::ajax() && Input::get("type") == "baivietmoi") {
                    $html = View::make("guest.relations.ajaxpagination_new", $bvm)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation bv moi nhat
                return View::make('guest.index')
                                ->with('contacts', $contacts)
                                ->with('chienLuoc', $chienLuoc)
                                ->with('forex', $forex)
                                ->with('kimloaiquy', $kimloaiquy)
                                ->with('hanghoa', $hanghoa)
                                ->with('cophieu', $cophieu)
                                ->with('newthreads', $newthreads)
                                ->with("title", "Trang chủ Forex");
        }
    }

    public function store() {
        if (Request::ajax()) {
            //Thêm vào csdl
            $hoten = Input::get("hoten");
            $email = Input::get("email");
            $tieude = Input::get("tieude");
            $noidung = Input::get("noidung");
            $lh = new LienHe();
            $result = $lh->Insert($hoten, $email, $tieude, $noidung);
            //Lấy nội dung trang thông báo thành công
            $html = View::make("guest.contacts.complete", array("result" => $result))->render();
            return Response::json(array('html' => $html));
        }
    }

    public function indexModify($type = null, $alias = null) {
        $contacts = Contact::Select();
        if ($type == "chienluoc") {
            switch ($alias) {
                case "forex": $forex = TinTuc::Select(1, $this->perpage);
                    //ajax pagingation forex
                    $tintuc['noidung'] = $forex;
                    $tintuc['phantrang'] = $forex->links();
                    if (Request::ajax() && Input::get("type") == "forex") {
                        $html = View::make("guest.chienluoc.forex.ajaxpagination", $tintuc)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation forex
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.traders.chienluoc_forex')
                                    ->with('contacts', $contacts)
                                    ->with('forex', $forex)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các chiến lược giao dịch Forex");
                case "vang":
                    $kimloaiquy = TinTuc::Select(2, $this->perpage);
                    //ajax pagingation kim loai quy
                    $klq['noidung'] = $kimloaiquy;
                    $klq['phantrang'] = $kimloaiquy->links();
                    if (Request::ajax() && Input::get("type") == "kimloaiquy") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_klq", $klq)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagination kim loai quy

                    $hanghoa = TinTuc::Select(3, $this->perpage);
                    //ajax pagingation hang hoa
                    $hh['noidung'] = $hanghoa;
                    $hh['phantrang'] = $hanghoa->links();
                    if (Request::ajax() && Input::get("type") == "hanghoa") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_hh", $hh)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation hang hoa

                    $cophieu = TinTuc::Select(4, $this->perpage);
                    //ajax pagingation co phieu
                    $cp['noidung'] = $cophieu;
                    $cp['phantrang'] = $cophieu->links();
                    if (Request::ajax() && Input::get("type") == "cophieu") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_cp", $cp)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation co phieu
                    return View::make('guest.traders.chienluoc_vang')
                                    ->with('contacts', $contacts)
                                    ->with('kimloaiquy', $kimloaiquy)
                                    ->with('hanghoa', $hanghoa)
                                    ->with('cophieu', $cophieu)
                                    ->with("title", "Các chiến lược giao dịch vàng");
                case "vang_klq":
                    $kimloaiquy = TinTuc::Select(2, $this->perpage);
                    //ajax pagingation kim loai quy
                    $klq['noidung'] = $kimloaiquy;
                    $klq['phantrang'] = $kimloaiquy->links();
                    if (Request::ajax() && Input::get("type") == "kimloaiquy") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_klq", $klq)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagination kim loai quy
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.traders.chienluoc_vang_klq')
                                    ->with('contacts', $contacts)
                                    ->with('kimloaiquy', $kimloaiquy)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các chiến lược giao dịch vàng với kim loại quý");
                case "vang_hh":
                    $hanghoa = TinTuc::Select(3, $this->perpage);
                    //ajax pagingation hang hoa
                    $hh['noidung'] = $hanghoa;
                    $hh['phantrang'] = $hanghoa->links();
                    if (Request::ajax() && Input::get("type") == "hanghoa") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_hh", $hh)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation hang hoa
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.traders.chienluoc_vang_hh')
                                    ->with('contacts', $contacts)
                                    ->with('hanghoa', $hanghoa)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các chiến lược giao dịch vàng với hàng hóa");
                case "vang_cp":
                    $cophieu = TinTuc::Select(4, $this->perpage);
                    //ajax pagingation co phieu
                    $cp['noidung'] = $cophieu;
                    $cp['phantrang'] = $cophieu->links();
                    if (Request::ajax() && Input::get("type") == "cophieu") {
                        $html = View::make("guest.chienluoc.chienluocvang.ajaxpagination_cp", $cp)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation co phieu
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.traders.chienluoc_vang_cp')
                                    ->with('contacts', $contacts)
                                    ->with('cophieu', $cophieu)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các chiến lược giao dịch vàng với chiến lược");
                default:
                    return $this->index(); //trang chủ mặc định
            }
        } else if ($type == "news") {
            switch ($alias) {
                case "tin_tn":
                    $newsTNs = TinTuc::Select(6, $this->perpage);
                    //ajax pagingation tin tức trong nước
                    $tinTN['noidung'] = $newsTNs;
                    $tinTN['phantrang'] = $newsTNs->links();
                    if (Request::ajax() && Input::get("type") == "tin_tn") {
                        $html = View::make("guest.news.ajaxpagination_tn", $tinTN)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation tin tức trong nước
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.news.index_tn')
                                    ->with('contacts', $contacts)
                                    ->with('newsTNs', $newsTNs)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các tin trong nước");
                case "tin_nn":
                    $newsNNs = TinTuc::Select(7, $this->perpage);

                    //ajax pagingation tin tức ngoài nước
                    $tinNN['noidung'] = $newsNNs;
                    $tinNN['phantrang'] = $newsNNs->links();
                    if (Request::ajax() && Input::get("type") == "tin_nn") {
                        $html = View::make("guest.news.ajaxpagination_nn", $tinNN)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation tin tức ngoài nước
                    //bv xem nhieu
                    $viewsthreads = TinTuc::SelectRelate("views", "", null, 5);
                    //ajax pagingation bv xem nhieu
                    $xemnhieu['noidung'] = $viewsthreads;
                    $xemnhieu['phantrang'] = $viewsthreads->links();
                    if (Request::ajax() && Input::get("type") == "xemnhieu") {
                        $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                        return Response::json(array('html' => $html));
                    }
                    //end ajax pagingation bv xem nhieu
                    return View::make('guest.news.index_nn')
                                    ->with('contacts', $contacts)
                                    ->with('newsNNs', $newsNNs)
                                    ->with('viewsthreads', $viewsthreads)
                                    ->with("title", "Các tin ngoài nước nước");
                default:
                    return $this->index(); //trang chủ mặc định
            }
        } else {
            return $this->index(); //trang chủ mặc định
        }
    }

    public function show($type, $alias, $id) {
        $url = new FunctionController();
        if ($url->isURL($type) && $url->isURL($alias)) {
            $contacts = Contact::Select();
            $title = $url->switchName($alias);
            $news = TinTuc::getANews($id, $url->getID($alias));
            //bv cung chuyen muc
            $threads = TinTuc::SelectRelate("same", $id, $url->getID($alias), 3);
            //ajax pagingation cung chuyen muc
            $bv['noidung'] = $threads;
            $bv['phantrang'] = $threads->links();
            if (Request::ajax() && Input::get("type") == "cungchuyenmuc") {
                $html = View::make("guest.relations.ajaxpagination_same", $bv)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation cung chuyen muc
            //bv moi nhat
            $newthreads = TinTuc::SelectRelate("new", $id, null, 5);
            //ajax pagingation bv moi nhat
            $bvm['noidung'] = $newthreads;
            $bvm['phantrang'] = $newthreads->links();
            if (Request::ajax() && Input::get("type") == "baivietmoi") {
                $html = View::make("guest.relations.ajaxpagination_new", $bvm)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation bv moi nhat
            //bv xem nhieu
            $viewsthreads = TinTuc::SelectRelate("views", $id, null, 5);
            //ajax pagingation bv xem nhieu
            $xemnhieu['noidung'] = $viewsthreads;
            $xemnhieu['phantrang'] = $viewsthreads->links();
            if (Request::ajax() && Input::get("type") == "xemnhieu") {
                $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation bv xem nhieu
            return View::make('guest.news.view')
                            ->with('contacts', $contacts)
                            ->with('news', $news)
                            ->with('threads', $threads)
                            ->with('newthreads', $newthreads)
                            ->with('viewsthreads', $viewsthreads)
                            ->with("title", $title);
        } else {
            return $this->index();
        }
    }

    public function showOthers($type, $id) {
        $url = new FunctionController();
        if ($url->isURL($type)) {
            $contacts = Contact::Select();
            $title = $url->switchName($type);
            $news = TinTuc::getANews($id, $url->getID($type));
            //bv cung chuyen muc
            $threads = TinTuc::SelectRelate("same", $id, $url->getID($type), 3);
            //ajax pagingation cung chuyen muc
            $bv['noidung'] = $threads;
            $bv['phantrang'] = $threads->links();
            if (Request::ajax() && Input::get("type") == "cungchuyenmuc") {
                $html = View::make("guest.relations.ajaxpagination_same", $bv)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation cung chuyen muc
            //bv moi nhat
            $newthreads = TinTuc::SelectRelate("new", $id, null, 5);
            //ajax pagingation bv moi nhat
            $bvm['noidung'] = $newthreads;
            $bvm['phantrang'] = $newthreads->links();
            if (Request::ajax() && Input::get("type") == "baivietmoi") {
                $html = View::make("guest.relations.ajaxpagination_new", $bvm)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation bv moi nhat
            //bv xem nhieu
            $viewsthreads = TinTuc::SelectRelate("views", $id, null, 5);
            //ajax pagingation bv xem nhieu
            $xemnhieu['noidung'] = $viewsthreads;
            $xemnhieu['phantrang'] = $viewsthreads->links();
            if (Request::ajax() && Input::get("type") == "xemnhieu") {
                $html = View::make("guest.relations.ajaxpagination_views", $xemnhieu)->render();
                return Response::json(array('html' => $html));
            }
            //end ajax pagingation bv xem nhieu
            return View::make('guest.news.view')
                            ->with('contacts', $contacts)
                            ->with('news', $news)
                            ->with('threads', $threads)
                            ->with('newthreads', $newthreads)
                            ->with('viewsthreads', $viewsthreads)
                            ->with("title", $title);
        } else {
            return $this->index();
        }
    }

    public function search($key) {
        $key = preg_replace('/\s\s+/', ' ', trim($key));
        $contacts = Contact::Select();
        $resultsearch = TinTuc::search($key, 10);
        //ajax pagingation tìm kiếm
        $rs['noidung'] = $resultsearch;
        $rs['phantrang'] = $resultsearch->links();
        if (Request::ajax() && Input::get("type") == "search") {
            $html = View::make("guest.searches.ajaxpagination", $rs)->render();
            return Response::json(array('html' => $html));
        }
        //end ajax pagingation tìm kiếm
        return View::make('guest.searches.index')
                        ->with('contacts', $contacts)
                        ->with("keysearch", $key)
                        ->with("result", $resultsearch)
                        ->with("title", "Kết quả tìm kiếm");
    }

}
