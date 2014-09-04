<?php

// Model:'Contact' - Database Table: 'contact'

Class Contact extends Eloquent {

    protected $table = 'contact';
    public $rules = array(
    );

    public function validate($data) {
        return Validator::make($data, $this->rules);
    }

    public static function Select($vitri = null) {
        $contacts = null;
        if ($vitri == null) {
            $contacts = DB::table('contact')
                    ->select('*')
                    ->where('vitri', 0)
                    ->orderBy('address')
                    ->get();
        } else {
            $contacts = DB::table('contact')
                    ->select('*')
                    ->where('vitri', $vitri)
                    ->first();
        }
        return $contacts;
    }

}
