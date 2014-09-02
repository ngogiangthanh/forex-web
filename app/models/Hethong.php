<?php

class Hethong extends Eloquent {
    
    public static function getValue($tentc) {
        //return DB::table('hethong')->where('tentc', $tentc)->first()->giatri;
        return "Forex Trader";
    }
    
    public static function getTencty() {
        return DB::table('tintuc')->first()->tieude;
    }
    
    public static function getInfocty() {
        return DB::table('tintuc')->first()->noidung;
    }
}
