<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2017/6/8
 * Time: 10:01
 */

namespace Home\Controller;


use Think\Controller;

class NewsController extends Controller
{
    public function index(){
        $dbname='recently';
        $rec=D('recently');
        $res=$rec->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display();
    }
    public function news(){
        $dbname='news';
        $news=D('news');
        $res=$news->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
    public function gongnue(){
        $dbname='gong';
        $gong=D('gong');
        $res=$gong->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
    public function activity(){
        $dbname='activity';
        $act=D('activity');
        $res=$act->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
    public function recently(){
        $dbname='recently';
        $rec=D('recently');
        $res=$rec->limit(1)->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
    public function notice(){
        $dbname='notice';
        $not=M('notice','','DB_CONFIG');
        $res=$not->limit(2)->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
    public function getmore(){
        //var_dump(I('get.'));
        $dbname=I('get.dbname');
        $not=M($dbname,'','DB_CONFIG');
        $res=$not->select();
        //var_dump($res);
        $this->assign('res',$res);
        $this->assign('dbname',$dbname);
        $this->display('News/index');
        //redirect(U('News/index'));
    }
}