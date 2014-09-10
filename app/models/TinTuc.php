<?php

// Model:'TinTuc' - Database Table: 'tintuc'

Class TinTuc extends Eloquent {

    protected $table = 'tintuc';
    public $rules = array(
        'tieude' => 'required',
        'noidung' => 'required',
        'loai' => 'required'
    );

    public function validate($data) {
        return Validator::make($data, $this->rules);
    }

    public static function Select($loai, $soluong = null, $tieude = null) {
        $data = null;
        if ($soluong == null) {
            $data = DB::table('tintuc')
                    ->select('tieude', 'noidung')
                    ->where('loai', $loai)
                    ->orderBy('thoidiemdang', 'desc')
                    ->first();
        } else if ($loai == -1) {
            if ($tieude == null) {
                $data = DB::table('tintuc')
                        ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai')
                        ->orderBy('thoidiemdang', 'desc')
                        ->orderBy('thoidiemsua', 'desc')
                        ->orderBy('luotxem', 'desc')
                        ->paginate($soluong);
            } else {
                $data = DB::table('tintuc')
                        ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai')
                        ->where("tieude", "LIKE", "%" . $tieude . "%")
                        ->orderBy('thoidiemdang', 'desc')
                        ->orderBy('thoidiemsua', 'desc')
                        ->orderBy('luotxem', 'desc')
                        ->paginate($soluong);
            }
        } else {
            if ($tieude != null) {
                $data = DB::table('tintuc')
                        ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai')
                        ->where("tieude", "LIKE", "%" . $tieude . "%", "and")
                        ->where('loai', $loai)
                        ->orderBy('thoidiemdang', 'desc')
                        ->orderBy('thoidiemsua', 'desc')
                        ->orderBy('luotxem', 'desc')
                        ->paginate($soluong);
            } else {
                $data = DB::table('tintuc')
                        ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai')
                        ->where('loai', $loai)
                        ->orderBy('thoidiemdang', 'desc')
                        ->orderBy('thoidiemsua', 'desc')
                        ->orderBy('luotxem', 'desc')
                        ->paginate($soluong);
            }
        }
        return $data;
    }

    public static function getANews($id, $type) {
        $data = DB::table("tintuc")
                ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai', 'noidung')
                ->where("loai", $type, "and")
                ->where("id", $id)
                ->first();
        if ($data != null) {
            //tang len mot don vi, can xem xet lai dua vao ip va thoi gian truy xuat
            DB::table("tintuc")->where("id", $id)->increment("luotxem");
        }
        return $data;
    }

    public static function search($arraykey, $soluong) {
        $data = DB::table("tintuc")
                ->select('id', 'tieude', 'anhnho', "thoidiemsua", "thoidiemdang", 'luotxem', 'loai')
                ->where('tieude', 'LIKE', "%" . $arraykey . "%")
                ->orderBy("luotxem", 'desc')
                ->orderBy("thoidiemdang")
                ->paginate($soluong);
        return $data;
    }

    public static function DeleteTT($id) {
        $row = DB::table("tintuc")
                ->select("anhnho")
                ->where("id", $id)
                ->first();
        if (File::exists($row->anhnho)) {
            File::delete($row->anhnho);
        }
        return DB::table("tintuc")
                        ->where("id", $id)
                        ->delete();
    }

    public static function InsertTT($data) {
        return DB::table("tintuc")
                        ->insertGetId($data);
    }

    public static function getAThread($id) {
        $data = DB::table("tintuc")
                ->select('id', 'tieude', 'anhnho', 'loai', 'noidung')
                ->where("id", $id)
                ->first();
        return $data;
    }

    public static function UpdateTT($data,$id) {
        return DB::table("tintuc")
                        ->where("id", $id)
                        ->update($data);
    }

}
