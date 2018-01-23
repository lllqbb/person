<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;

class Index extends Controller
{
//    初始化
//    public function _initialize()
//    {
//        $a = Request::instance()->session('name');
//        if(empty($a)){
////            dump($a);
//            $this->redirect('Index/login');
//        }
//    }

    public function index()
    {
        $name = input('session.name');
//        dump($name);die();
        $this->assign('name',$name);
        return $this->fetch();
    }

    public function login()
    {
//        引入phpexcel
        $a = new \PHPExcel();
        return $this->fetch();
    }

    public function dologin()
    {
        $user = $_POST['username'];
        $pas = $_POST['password'];
        $pass = md5(md5($pas).'ahaaha'.'liuqian');
        $table = db('user');
        $res = $table->where('name',"{$user}")->where('pass',"{$pass}")->find();
        if($res){

            Session::set('name',$res['name']);
//            dump($res['name']);die();
//            $this->assign('name',$res['name']);
            $baseUrl = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING']);
            dump($baseUrl);die();
            $this->redirect('index');
        }else{
            return $this->error('帐号或密码错误！请重新登录');
        }
    }

    public function welcome(){
        return $this->fetch();
    }

    public function admin_role(){
        return $this->fetch();
    }

    public function admin_permission(){
        return $this->fetch();
    }

    public function admin_list(){
        return $this->fetch();
    }
}
