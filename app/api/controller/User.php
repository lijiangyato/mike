<?php

namespace app\api\controller;
use think\Request;
use app\api\model\Moldeluser;
//用户接口
class  User
{

    public $name="name";//昵称
    public $password="password";//密码
    public $number="number";//号码
    public $mnemali="mnemali";//邮箱
    public function index()
    {
        dump(config());
    }

    //登录方法
    public function login(){

    }

    //检查用户名
    public function inspectuser(){
        $moldeluser=new Moldeluser();
        $request = Request::instance();
       return $moldeluser->inspectuser($request->param($this->name));

    }
    //检查用户号码
    public function inspectnumber(){
        $moldeluser=new Moldeluser();
        $request = Request::instance();
        return $moldeluser->inspectnumber($request->param($this->number));

    }

    //检查用户邮箱
    public function inspectmnemali(){
        $moldeluser=new Moldeluser();
        $request = Request::instance();
        return $moldeluser->inspectmnemali($request->param($this->mnemali));

    }

}

