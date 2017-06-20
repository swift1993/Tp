<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2017/6/7
 * Time: 10:57
 */

namespace Home\Controller;


use Think\Controller;

class RegisterController extends Controller
{
        public function Index(){
            $this->display();
        }
        public function do_register(){
            //var_dump( I('post.'));
            $name=I('post.username');
            $pwd=I('post.password');
            $rpwd=I('post.rpassword');

            if(preg_match('/^1[3578][0-9]{9}$/',$name)||preg_match('/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+$/',$name)){
                if($pwd==$rpwd){
                    $user=D('user');
                    $user->create();
                    $result=$user->add();
                    if($result){
                        //echo "注册成功";
                        $this->display('Register/register_success');
                    }
                }else{
                    $this->display('Register/register_fail');
                }
            }else{
                $this->display('Register/register_fail');
            }
        }
}