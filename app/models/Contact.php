<?php

// Model:'Contact' - Database Table: 'contact'

Class Contact extends Eloquent {

    protected $table = 'contact';
    public $rules = array(
    );

    public function validate($data) {
        return Validator::make($data, $this->rules);
    }

    public static function Select($address = null) {
        $contacts = null;
        if ($address == null) {
            $contacts = DB::table('contact')
                    ->select('*')
                    ->orderBy('address')
                    ->get();
        } else {
            $contacts = DB::table('contact')
                    ->select('*')
                    ->where('address', $address)
                    ->first();
        }
        return $contacts;
    }

}
