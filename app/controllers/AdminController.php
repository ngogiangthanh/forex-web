<?php

class AdminController extends BaseController {
    public function index($alias = "") {
        switch ($alias) {
            case "qltintuc":
                return View::make('admin.news.index')
                                ->with("title", "Quản lý tin tức");
            case "qlgiaodich":
                return View::make('admin.traders.index')
                                ->with("title", "Quản lý giao dịch");
            case "qlsangiaodich":
                return View::make('admin.floortraders.index')
                                ->with("title", "Quản lý sàn giao dịch");
            case "qllienhe":
                return View::make('admin.contacts.index')
                                ->with("title", "Quản lý liên hệ");
            case "qllienlac":
                return View::make('admin.lienlac.index')
                                ->with("title", "Quản lý liên lạc");
            case "login":
                return View::make('admin.login')
                                ->with("title", "Login");                   
            default:
                return View::make('admin.news.index')
                                ->with("title", "Quản lý tin tức");
        }
    }

}
