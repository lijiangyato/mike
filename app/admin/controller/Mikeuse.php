<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Mikeuser;

class  Mikeuse extends Controller{
    public $username;
    public $mnemali;
    public $number;
    public $lijiang;
    public function index(){

       //$this->exampletable();
        $list = new Mikeuser();
        $list=$list->all();
        $this->assign('list',$list);



        return $this->fetch("index/mikeuse");
    }

    //查询使用人员
    public function  exampletable(){
         $useratale= Mikeuser::all();
         $this->assign("list",$useratale);


          foreach ($useratale as $value){
           $this->username=$value->value("name");
           $this->mnemali=$value->value("mnemali");
           $this->number=$value->value("number");


          }

    }

}