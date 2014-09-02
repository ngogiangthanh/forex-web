<?php

// Model:'TinTuc' - Database Table: 'tintuc'

Class TinTuc extends Eloquent
{

    protected $table='tintuc';
    public $rules = array(
                'tieude' => 'required',
                'noidung' => 'required',
                'loai' =>'required'
	);

    public function validate($data){
            return Validator::make($data, $this->rules);
        }

}