<?php

class HethongController extends BaseController {

    public function postUpdatehethong() {
        $configs = DB::table('hethong')->get();
        $input = array_except(Input::all(), '_method');
        
        foreach ($configs as $config){
            DB::table ('hethong')->where('tentc',$config->tentc)->update(array('giatri' => $input[$config->tentc]));
        }
    }

}
