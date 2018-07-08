<?php
namespace app\common\controller;
class Authenticateuser{
    /*$user->username = '样压根';
                $user->password = 'yatowaili1314520';
                $user->save();*/
    //判断用户名
    public function  judgeuse($str1,$str2){

          if ($str1==$str2){
              return true;
          }
          else{
             return false;
          }
        }
    //判断用户名密码
    public function judgepassword($str1,$str2){
        if ($str1==$str2){
            return true;
        }
        else{
            return false;
        }
    }


}