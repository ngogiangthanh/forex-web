<?php

class AdminController extends BaseController {

   public function getHocforex() {
        return View::make('grids.hocforex');
    }

    public function getPostnews() {
        return View::make('grids.tintuc');
    }

    public function getPostimage() {
        return View::make('grids.hinhanh');
    }
}
