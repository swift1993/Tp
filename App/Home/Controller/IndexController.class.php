<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){


        $acter=D('acter');
        $res=$acter->select();
        $this->assign('result',$res);
        $this->display();
    }
}