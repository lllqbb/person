<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//use think\Route;
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
//强制路由
//前台
//Route::get('/','index/Index/index');
//Route::get('news','index/Index/news');
//
//
////后台
//
//Route::get('admin','admin/Index/index');
//Route::get('admin/login','admin/Index/login');
//Route::post('admin/dologin','admin/Index/dologin');
//
//
//
////测试
//Route::get('admin/ind',function(){
//    return '123';
//});