<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/6/25
 * Time: 0:26
 */
namespace app\admin\controller;
use think\Controller;
class  Mikechart extends Controller{

    public function index(){
        return $this->fetch("index/mikechart");
    }

}