<?php

namespace app\api\model;

use app\api\model\Mikeuser;

use think\Request;

class  Moldeluser
{
    public $name = "name";
    public $number = "number";
    public $mnemali = "mnemali";
    public $nameid = "73395241670189479169922979866676";
    public $numberid = "73395241670189479169922979866676";
    public $mnemalid = "52193707819816964885832391428313";

    //检查昵称是否存在
    public function inspectuser($name)
    {
        $request = Request::instance();
        $user = Mikeuser::where(array($this->name => $request->param($this->name)))->find();
        if ($user[$this->name] == $name) {
            return $this->usrjson(-1, "失败", '100', '用户已存在', 'null');

        } else {
            return $this->usrjson(1, "成功", '200', '用户不存在', $this->nameid);
        }
    }

    //检查用户号码
    public function inspectnumber($number)
    {
        $request = Request::instance();
        $user = Mikeuser::where(array($this->number => $request->param($this->number)))->find();
        if ($user[$this->number] == $number) {
            return $this->usrjson(1, "失败", '100', '手机号已存在', 'null');

        } else {
            return $this->usrjson(1, "成功", '200', '手机号不存在', $this->numberid);

        }
    }

    //检查用户邮箱
    public function inspectmnemali($mnemali)
    {
        $request = Request::instance();
        $user = Mikeuser::where(array($this->mnemali => $request->param($this->mnemali)))->find();
        if ($user[$this->mnemali] == $mnemali) {
            return $this->usrjson(-1, "失败", '100', '邮箱已存在', 'null');

        } else {
            return $this->usrjson(1, "成功", '200', '邮箱不存在', $this->mnemalid);
        }
    }

    public function register($name, $password, $number, $mnemali, $nameID, $numberID, $mnemaliID)
    {
       if ($this->validate($name, $password, $number, $mnemali, $nameID, $numberID, $mnemaliID)!=false){
           //满足条件开始注册
       }
    }


    public function usrjson($judge, $success, $code, $msg, $id)
    {
        if ($judge == '1') {
            $data = ['ID' => $id];
            return json(['success' => $success, 'code' => $code, 'msg' => $msg, 'data' => $data]);
        }
        if ($judge == '-1') {
            $data = ['ID' => $id];
            return json(['success' => $success, 'code' => $code, 'msg' => $msg, 'data' => $data]);

        }
    }

    public  function validate($name, $password, $number, $mnemali, $nameID, $numberID, $mnemaliID){
        $judge=true;
        if ($name==''){
           return $judge=false;
        }
        else if ($password==''){
            return $judge=false;
        }
        else if ($number==''){
           return $judge=false;
        }
        else if ($mnemali==''){
            return $judge=false;
        }
        else if ($nameID==''||$nameID!=$this->nameid){
           return $judge=false;
        }
        else if ($numberID==''||$numberID!=$this->numberid){
            return $judge=false;
        }
        else if ($mnemaliID==''||$mnemaliID!=$this->mnemalid){
            return $judge=false;
        }
        return $judge;

    }


}