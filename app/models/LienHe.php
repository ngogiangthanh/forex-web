<?php

// Model:'LienHe' - Database Table: 'lienhe'

Class LienHe extends Eloquent
{

    protected $table='lienhe';
    public $rules = array(
                'hoten' => 'required',
                'email' => 'required',
                'tieude' =>'required',
                'noidung' =>'required'
	);

    public function validate($data){
            return Validator::make($data, $this->rules);
        }
}