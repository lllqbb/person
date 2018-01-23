<?php
namespace app\index\controller;


use think\View;

class Index
{
    public function index()
    {
        $view = new View();
        return $view->fetch();
    }
    public function news()
    {
        $view = new View();
        return $view->fetch();
    }
}
