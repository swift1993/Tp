<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/20
 * Time: 10:58
 */

namespace Home\Controller;


use Think\Controller;

class PayController extends Controller
{
        public function index(){
            $stig=D('stigmalist');
            $res=$stig->select();
            $this->assign('res',$res);
            $this->display();
        }
        public function jj(){
            $num=I('post.num');
            $status=I('post.status');
            if(!$status){
            $arr['num']=--$num;
            $arr['status']=$status;
            }else{
                $arr['num']=++$num;
                $arr['status']=$status;
            }
            echo json_encode($arr);

        }
}