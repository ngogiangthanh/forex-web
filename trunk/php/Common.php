<?php

    function convert_vi_to_en($str){
                $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		return strtolower($str);    
    };
    //cat ten     
    function firstName($hoten){    
        $temp = explode(" ", $hoten);
        return $temp[count($temp)-1];        
    };
    function beginLastName($hoten){
	$str = "";
        $temp = explode(" ", $hoten);
        $len = count($temp);
        for ($i=0; $i <  $len- 1; $i++){
            $str .= substr($temp[$i], 0, 1);
        }
        return $str;
    };
    //Tao tu dong email cho sinh vien tu K30 - K39
    function createEmail($masv, $hoten){
        $hoten = convert_vi_to_en($hoten);
        $email = "";        
        //cat 2 ky tu 2,3 trong masv de lay nam nhap hoc
        //sau do: + 2000 -1974=Khoa
        //tao email
        $nam = intval(substr($masv, 1,2));
        if ($nam >= 4 && $nam <=90){
            $khoa = ($nam + 2000) - 1974;
            switch ($khoa) {
                case 38:
                case 39: 
                    $email = firstName($hoten) . $masv;
                    break;
                case 36:
                case 37:
                    $email = firstName($hoten) . substr($masv, -6);
                    break;
                case 35:
                    $email = firstName($hoten) . substr($masv, -3);
                    break;
                case 31:
                case 32:
                case 33:
                case 34:
                    $email = beginLastName($hoten).firstName($hoten).substr($masv, -2);
                    break;
                case 30:
                    $email = firstName($hoten).'.'.$masv;
                    break;
                default:
                    break;
            }
            $email = $email.'@student.ctu.edu.vn';
            return $email;
        }else
        {
            return "";
        }
    };
?>
