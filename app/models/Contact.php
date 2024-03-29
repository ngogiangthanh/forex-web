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
            if ($vitri != -1) {
                $contacts = DB::table('contact')
                        ->select('*')
                        ->where('vitri', $vitri)
                        ->first();
            } else {
                $contacts = DB::table('contact')
                        ->select('*')
                        ->orderBy('address')
                        ->get();
            }
        }
        return $contacts;
    }

    public static function DeleteCT($id) {
        return DB::table("contact")
                        ->where("id", $id)->delete();
    }

    public static function InsertLL($data) {
        return DB::table("contact")->insert($data);
    }

    public static function UpdateLL($id, $data) {
        return DB::table("contact")
                ->where("id", $id)
                ->update($data);
    }

    public static function getAContact($id) {
        $data = DB::table("contact")
                ->select('id','address','tel','fax','email','facebook','link','vitri')
                ->where("id", $id)
                ->first();
        return $data;
    }
}
