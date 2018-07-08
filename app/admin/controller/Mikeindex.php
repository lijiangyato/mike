<?php
namespace app\admin\controller;
use think\Controller;
class  Mikeindex extends Controller{
    public function index(){
        return $this->fetch("index/mikeindex");
    }

}