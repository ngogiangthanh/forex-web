<?php

class GuestController extends BaseController {
    private $perpage = 3;
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
            case "sanphamgd": 
                $sp_gd = TinTuc::Select(8, $this->perpage);
                //ajax pagingation chien luoc giao dich
                $spgd['noidung'] = $sp_gd;
                $spgd['phantrang'] = $sp_gd->links();
                if (Request::ajax() && Input::get("type") == "sp_gd") {
                    $html = View::make("guest.traders.ajaxpagination_sanpham", $spgd)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc giao dich
                return View::make('guest.traders.sanpham')
                                ->with('contacts', $contacts)
                                ->with('sp_gd',$sp_gd)
                                ->with("title", "Sản phẩm giao dịch");
            case "kinhnghiemgd":
                $gold = TinTuc::Select(2, $this->perpage);
                //ajax pagingation chien luoc vang
                $chienluocvang['noidung'] = $gold;
                $chienluocvang['phantrang'] = $gold->links();
                if (Request::ajax() && Input::get("type") == "kinhnghiemgd") {
                    $html = View::make("guest.chienluocvang.ajaxpagination_kn", $chienluocvang)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc vang
                return View::make('guest.traders.kinhnghiem')
                                ->with('contacts', $contacts)
                                ->with('gold', $gold)
                                ->with("title", "Kinh nghiệm giao dịch");
                break;
            case "chienluocgd":
                $gdchienluoc = TinTuc::Select(9, $this->perpage);
                //ajax pagingation chien luoc giao dich
                $chienluoc['noidung'] = $gdchienluoc;
                $chienluoc['phantrang'] = $gdchienluoc->links();
                if (Request::ajax() && Input::get("type") == "gd_chien_luoc") {
                    $html = View::make("guest.traders.ajaxpagination_chienluoc", $chienluoc)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc giao dich
                return View::make('guest.traders.chienluoc')
                                ->with('contacts', $contacts)
                                ->with('gdchienluoc', $gdchienluoc)
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
            case "admin":
                return View::make('admin.index')
                                ->with("title", "Trang chủ quản lý");
            default:
                $forex = TinTuc::Select(1, $this->perpage);
                //ajax pagingation forex
                $tintuc['noidung'] = $forex;
                $tintuc['phantrang'] = $forex->links();
                if (Request::ajax() && Input::get("type") == "forex") {
                    $html = View::make("guest.forex.ajaxpagination", $tintuc)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation forex

                $gold = TinTuc::Select(2, $this->perpage);
                //ajax pagingation chien luoc vang
                $chienluocvang['noidung'] = $gold;
                $chienluocvang['phantrang'] = $gold->links();
                if (Request::ajax() && Input::get("type") == "kinhnghiemgd") {
                    $html = View::make("guest.chienluocvang.ajaxpagination_kn", $chienluocvang)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagination chien luoc vang

                $FAs = TinTuc::Select(3, $this->perpage);
                //ajax pagingation FA
                $phantichFA['noidung'] = $FAs;
                $phantichFA['phantrang'] = $FAs->links();
                if (Request::ajax() && Input::get("type") == "phantichfa") {
                    $html = View::make("guest.chienluocvang.ajaxpagination_fa", $phantichFA)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation FA 

                $TAs = TinTuc::Select(4, $this->perpage);
                //ajax pagingation TA
                $phantichTA['noidung'] = $TAs;
                $phantichTA['phantrang'] = $TAs->links();
                if (Request::ajax() && Input::get("type") == "phantichta") {
                    $html = View::make("guest.chienluocvang.ajaxpagination_ta", $phantichTA)->render();
                    return Response::json(array('html' => $html));
                }
                //end ajax pagingation FA 
                $chienLuoc = TinTuc::Select(0);
                return View::make('guest.index')
                                ->with('contacts', $contacts)
                                ->with('chienLuoc', $chienLuoc)
                                ->with('forex', $forex)
                                ->with('gold', $gold)
                                ->with('FAs', $FAs)
                                ->with('TAs', $TAs)
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
    
    public function show($type,$id)
    {
        $contacts = Contact::Select();
        switch ($type)
        {
            case 'forex':
                     return View::make('guest.forex.view')
                                ->with('contacts', $contacts)
                                ->with("title", "Các tin tức trong nước và ngoài nước");
            default:
                    return $this->index();
        }
    }

}
