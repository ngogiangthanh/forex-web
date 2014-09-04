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
                return View::make('guest.traders.sanpham')
                                ->with('contacts', $contacts)
                                ->with('sp_gd', $sp_gd)
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
                return View::make('guest.traders.kinhnghiem')
                                ->with('contacts', $contacts)
                                ->with('kinhnghiem', $kinhnghiem)
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
                return View::make('guest.traders.kienthuc')
                                ->with('contacts', $contacts)
                                ->with('kienthuc', $kienthuc)
                                ->with("title", "Chiến lược giao dịch");
                break;
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
                return View::make('guest.floortrader.index')
                                ->with('contacts', $contacts)
                                ->with('sangd', $sangd)
                                ->with("title", "Sàn giao dịch");
                break;
            case "contact":
                $supportContact = Contact::Select("CUSTOMER SUPPORT");
                return View::make('guest.contacts.index')
                                ->with('contacts', $contacts)
                                ->with("supportContact", $supportContact)
                                ->with("title", "Gửi liên hệ");
                break;
            case "login":
                $supportContact = Contact::Select("CUSTOMER SUPPORT");
                return View::make('guest.login.index')
                                ->with('contacts', $contacts)
                                ->with("supportContact", $supportContact)
                                ->with("title", "Trang login");
            case "admin":
                return View::make('admin.index')
                                ->with("title", "Trang chủ quản lý");
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
                return View::make('guest.index')
                                ->with('contacts', $contacts)
                                ->with('chienLuoc', $chienLuoc)
                                ->with('forex', $forex)
                                ->with('kimloaiquy', $kimloaiquy)
                                ->with('hanghoa', $hanghoa)
                                ->with('cophieu', $cophieu)
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
                    return View::make('guest.traders.chienluoc_forex')
                                    ->with('contacts', $contacts)
                                    ->with('forex', $forex)
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
                    return View::make('guest.traders.chienluoc_vang_klq')
                                    ->with('contacts', $contacts)
                                    ->with('kimloaiquy', $kimloaiquy)
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
                    return View::make('guest.traders.chienluoc_vang_hh')
                                    ->with('contacts', $contacts)
                                    ->with('hanghoa', $hanghoa)
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
                    return View::make('guest.traders.chienluoc_vang_cp')
                                    ->with('contacts', $contacts)
                                    ->with('cophieu', $cophieu)
                                    ->with("title", "Các chiến lược giao dịch vàng với chiến lược");
                default:
                    return $this->index(); //trang chủ mặc định
            }
        } else {
            $this->index(); //trang chủ mặc định
        }
    }

    public function show($type, $id) {
        $contacts = Contact::Select();
        switch ($type) {
            case 'forex':
                return View::make('guest.forex.view')
                                ->with('contacts', $contacts)
                                ->with("title", "Các tin tức trong nước và ngoài nước");
            default:
                return $this->index();
        }
    }

}
