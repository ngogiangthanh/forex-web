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

}
