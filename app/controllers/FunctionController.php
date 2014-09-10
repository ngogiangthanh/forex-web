<?php

class FunctionController extends BaseController {

    private $arrayName = array(
        "news" => "Tin tức",
        "chienluoc" => "Chiến lược giao dịch",
        "vang" => "Chiến lược vàng",
        "forex" => "Chiến lược Forex",
        "vang_klq" => "Kim loại quý",
        "vang_hh" => "Hàng hóa",
        "vang_cp" => "Cổ phiếu",
        "sanpham" => "Sản phẩm giao dịch",
        "kinhnghiem" => "Kinh nghiệm giao dịch",
        "kienthuc" => "Kiến thức giao dịch",
        "sangd" => "Sàn giao dịch",
        "contact" => "Liên hệ",
        "forexmarket" => "Forex Market",
        "tin_tn" => "Tin trong nước",
        "tin_nn" => "Tin ngoài nước",
        "news" => "Tin tức",
        "threads" => "Bài viết",
        "search" => "Kết quả tìm kiếm"
    ); //ds cac loai tin tuc trong web
    private $arrayAlias = array(
        0 => "intro",
        1 => "forex",
        2 => "vang_klq",
        3 => "vang_hh",
        4 => "vang_cp",
        5 => "sangd",
        6 => "tin_tn",
        7 => "tin_nn",
        8 => "sanpham",
        9 => "kienthuc",
        10 => "kinhnghiem",
        11 => "chienluoc",
        12 => "vang",
        13 => "news"
    ); //ds cac loai tin tuc va alias tuong ung
    private $relationship = array(
        0 => -1,
        1 => 11,
        2 => 11,
        3 => 11,
        4 => 11,
        5 => -1,
        6 => 13,
        7 => 13,
        8 => -1,
        9 => -1,
        10 => -1,
        11 => -1,
        12 => 11,
        13 => -1
    ); //ds quan hệ -1 la ket thuc ko có cha
    private $upexpect = array(8, 9, 10, 5);

    //lay duong dan dua vao so loai

    public function getURL($numtype) {
        try {
            $url = $this->arrayAlias[$numtype];
            $parent = $this->relationship[$numtype];
            while ($parent != -1) {
                $url = $this->arrayAlias[$parent] . "/" . $url;
                $parent = $this->relationship[$parent];
            }
            return $url;
        } catch (Exception $ex) {
            return null;
        }
    }

    //
    public function getID($alias) {
        $size = sizeof($this->arrayAlias);
        $numtype = -1;
        for ($i = 0; $i < $size; $i++) {
            if ($this->arrayAlias[$i] == $alias) {
                $numtype = $i;
                break;
            }
        }
        return $numtype;
    }

    //
    public function getURLAlias($alias) {
        $numtype = $this->getID($alias);
        return ($numtype != -1) ? $this->getURL($numtype) : "";
    }

    //
    public function isUnexpected($numtype) {
        return (array_search($numtype, $this->upexpect) == null || !array_search($numtype, $this->upexpect)) ? false : true;
    }

    //
    public function switchName($urlElement) {
        try {
            return $this->arrayName[$urlElement];
        } catch (Exception $ex) {
            return null;
        }
    }

    //kiem tra url co ton tai khong
    public function isURL($fullUrl) {
        if ($fullUrl == null || $fullUrl == "/") {
            return false;
        } else {
            $arrayUrlElements = explode("/", $fullUrl);
            $size = sizeof($arrayUrlElements);
            if ($size == 3) {
                $size--;
            }
            for ($i = 0; $i < $size; $i++) {
                if ($this->switchName($arrayUrlElements[$i]) == null) {
                    return false;
                }
            }
            return true;
        }
    }

    //lay duong dan url duoi dang html
    public function getNAVName($fullUrl) {
        $arrayUrlElements = explode("/", $fullUrl);
        $stringNAV = "<a href='" . url('/') . "'>" . $this->switchName('forexmarket') . "</a>";
        $size = sizeof($arrayUrlElements);
        for ($i = 0; $i < $size - 1; $i++) {
            $stringNAV .= " > <a href='" . url($this->getURLAlias($arrayUrlElements[$i])) . "'>" . $this->switchName($arrayUrlElements[$i]) . "</a>";
        }
        $stringNAV .= ($this->switchName($arrayUrlElements[$size - 1]) == null) ? " > Bài viết" : " > " . $this->switchName($arrayUrlElements[$size - 1]);
        return $stringNAV;
    }

}
