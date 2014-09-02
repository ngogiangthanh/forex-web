<?php

// Model:'Contact' - Database Table: 'contact'

Class Contact extends Eloquent
{

    protected $table='contact';
    public $rules = array(
	);

    public function validate($data){
            return Validator::make($data, $this->rules);
        }

}