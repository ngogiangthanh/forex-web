<?php

// Model:'LienHe' - Database Table: 'lienhe'

Class LienHe extends Eloquent {

    protected $table = 'lienhe';
    public $rules = array(
        'hoten' => 'required',
        'email' => 'required',
        'tieude' => 'required',
        'noidung' => 'required'
    );

    public function validate($data) {
        return Validator::make($data, $this->rules);
    }

    public function Insert($hoten, $email, $tieude, $noidung) {
        $data = array('hoten' => ($hoten),
            'email' => ($email),
            'tieude' => ($tieude),
            'noidung' => ($noidung),
            'thoidiemgui' => date("Y-m-d H:i:s", time()));
        if ($this->validate($data)) {
            $result = DB::table($this->table)
                    ->insert($data);
            return $result;
        } else {
            return "false";
        }
    }

    public static function UpdateTT($id) {
        $row = DB::table("lienhe")
                ->select("trangthai")
                ->where('id',$id)
                ->first();
       if ($row != null) {
            $trangthai = 0;
            if ($row->trangthai == 0) {
                $trangthai = 1;
            }
            $newValue = array(
                "trangthai" => $trangthai,
                "thoidiemxuly" => date("Y-m-d H:i:s", time())
            );
            DB::table("lienhe")
                    ->where('id', $id)
                    ->update($newValue);
            return true;
        }
        return false;
    }

    public static function Select($id = null, $soluong = null, $search = null) {
        $data = null;
        if ($id == null) {
            if ($search == null) {
                $data = DB::table("lienhe")
                        ->select('id', 'hoten', 'email', 'tieude', 'thoidiemgui', 'thoidiemxuly', 'trangthai')
                        ->orderBy('thoidiemgui', 'desc')
                        ->orderBy('trangthai')
                        ->orderBy('thoidiemxuly', 'desc')
                        ->paginate($soluong);
            } else {
                $data = DB::table("lienhe")
                        ->select('id', 'hoten', 'email', 'tieude', 'thoidiemgui', 'thoidiemxuly', 'trangthai')
                        ->where("email", "LIKE", "%" . $search . "%")
                        ->orWhere("hoten", "LIKE", "%" . $search . "%")
                        ->orderBy('thoidiemgui', 'desc')
                        ->orderBy('trangthai')
                        ->orderBy('thoidiemxuly', 'desc')
                        ->paginate($soluong);
            }
        }
        return $data;
    }

}
