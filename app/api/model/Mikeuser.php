<?php

namespace app\api\model;

use  think\Model;
//注册
class  Mikeuser extends Model
{
protected  $connection=[
// 数据库类型
    'type'            => 'mysql',
    // 服务器地址
    'hostname'        => '127.0.0.1',
    // 数据库名
    'database'        => 'mike',
    // 用户名
    'username'        => 'root',
    // 密码
    'password'        => '',
    // 端口
    'hostport'        => '3306'
];








}