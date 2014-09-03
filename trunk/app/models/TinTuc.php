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

    public static function Select($loai, $soluong = null) {
        $data = null;
        if ($soluong == null) {
            $data = DB::table('tintuc')
                    ->select('tieude', 'noidung')
                    ->where('loai', $loai)
                    ->first();
        } else {
            $data = DB::table('tintuc')
                    ->select('id','tieude','anhnho',"thoidiemsua",'luotxem')
                    ->where('loai', $loai)
                    ->orderBy('thoidiemdang')
                    ->paginate($soluong);
        }
        return $data;
    }

}
