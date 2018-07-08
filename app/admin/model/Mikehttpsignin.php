<?php

namespace app\admin\model;

use think\Request;
use app\admin\model\Mikeuser;
use app\common\Authenticateuser;

class  Mikehttpsignin
{
    public $mauthenticateuser;
    public $name="name";
    public $password="password";

    //登录
    public function singin()
    {
        $mauthenticateuser = new \app\common\controller\Authenticateuser();
        $request = Request::instance();
        //!=unll
        if ($request->param($this->name) != null && $request->param($this->password) != null) {

            $user = Mikeuser::where(array($this->name => $request->param($this->name)))->find();
            if ($mauthenticateuser->judgeuse($request->param($this->name),$user[$this->name])&&$mauthenticateuser->judgepassword($request->param($this->password),$user[$this->password])) {
                return "0";
            } else {
                return "-1";
            }
        }
        //==null
        if ($request->param($this->name)==''||$request->param($this->password)==''){
           return -2;
        }


    }


}
