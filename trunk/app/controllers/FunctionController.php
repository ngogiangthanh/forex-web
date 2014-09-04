<?php

class FunctionController extends BaseController {

    public static function switchName($urlElement)
    {
        switch ($urlElement)
        {
            case 'news': return "Tin tức";
            case 'chienluoc': return "Chiến lược giao dịch";
            case 'vang': return "Chiến lược vàng";
            case 'forex': return "Chiến lược Forex";
            case 'vang_klq': return "Kim loại quý";
            case 'vang_hh': return "Hàng hóa";
            case 'vang_cp': return "Cổ phần";
            case 'sanpham': return "Sản phẩm giao dịch";
            case 'kinhnghiem': return "Kinh nghiệm giao dịch";
            case 'kienthuc': return "Kiến thức giao dịch";
            case 'sangd': return "Sàn giao dịch";
            case 'contact': return "Liên hệ";
            default : return "Forex Market";
        }
    }
    
    public static function getNAVName($fullUrl)
    {
        if($fullUrl == null || $fullUrl == "/")
        {
            return "";
        }
        else{
            $arrayUrlElements = explode("/",$fullUrl);
            $stringNAV = "<a href='".url('/')."'>".FunctionController::switchName('')."</a>";
            $size = sizeof($arrayUrlElements);
            for($i=0;$i<$size-1;$i++)
                $stringNAV .= " > <a href='".url($arrayUrlElements[$i])."'>".FunctionController::switchName($arrayUrlElements[$i])."</a>";
            $stringNAV .= " > ".FunctionController::switchName($arrayUrlElements[$size-1]);
            return $stringNAV;
        }
    }

}
