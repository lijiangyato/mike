<?php

namespace app\admin\controller;
use app\admin\model\Mikehttpsignin;
use app\admin\model\Mikeuser;
use think\Controller;
use think\Route;

class  Login extends Controller
{
    public function index(){
        return $this->fetch("login/login");
    }


    //添加数据
    public function mikadd()
    {
        $user = new Mikeuser();
        $user->username = '李江';
        $user->password = 'yatowaili1314520';
        $user->save();
    }

    //登录方法
    public function singin(){
        $singin = new Mikehttpsignin();
        if ($singin->singin() == "0") {
            $this->success("跳转成功",url("Mikeindex/index"));
            //return "登录成功";
        }
        if ($singin->singin()=="-1"){
            $this->error("用户密码错误".$singin->singin());
        }
        if ($singin->singin()=='-2'){
            $this->error("用户名密码不能为空".$singin->singin());
        }


    }


}