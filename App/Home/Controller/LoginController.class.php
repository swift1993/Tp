<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

        $this->display();
    }
    public function getcode(){
        session_start();
        $code = "";
        for ($i = 0; $i < 4; $i++) {
            $code .= rand(0, 9);
        }
        //4位验证码也可以用rand(1000,9999)直接生成
        //将生成的验证码写入session，备验证时用
        $_SESSION["code"] = $code;
        //创建图片，定义颜色值
        header("Content-type: image/PNG");
        $im = imagecreate(150, 60);
        $black = imagecolorallocate($im, 0, 0, 0);
        $gray = imagecolorallocate($im, 200, 200, 200);
        $bgcolor = imagecolorallocate($im, 255, 255, 255);
        //填充背景
        imagefill($im, 0, 0, $gray);
        //画边框
        imagerectangle($im, 0, 0, 150-1, 60-1, $black);
        //随机绘制两条虚线，起干扰作用
        $style = array ($black,$black,$black,$black,$black,
            $gray,$gray,$gray,$gray,$gray
        );
        imagesetstyle($im, $style);
        $y1 = rand(0, 60);
        $y2 = rand(0, 60);
        $y3 = rand(0, 60);
        $y4 = rand(0, 60);
        imageline($im, 0, $y1, 150, $y3, IMG_COLOR_STYLED);
        imageline($im, 0, $y2, 150, $y4, IMG_COLOR_STYLED);
        //在画布上随机生成大量黑点，起干扰作用;
        for ($i = 0; $i < 80; $i++) {
            imagesetpixel($im, rand(0, 150), rand(0, 60), $black);
        }
        $fontfile='./Public/font/xingshu.ttf';
        imagettftext($im,24,0,50,40,$black,$fontfile,$code);
        //将数字随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
        $strx = rand(3, 8);
        /*for ($i = 0; $i < 4; $i++) {
            $strpos = rand(1, 6);
            imagestring($im, 5, $strx, $strpos, substr($code, $i, 1), $black);
            $strx += rand(8, 12);
        }*/
        imagepng($im);//输出图片
        imagedestroy($im);//释放图片所占内存
    }
    public function do_login(){
        $name=I('post.username');
        $pwd=I('post.password');
        $status=I('post.rmpassword');
        $code=I('post.code');
        //var_dump($code);
        //var_dump($_SESSION['code']);
        $user=D('user');
        $res=$user->select();
        //var_dump($res[0]);
        //var_dump(I('post.'));
        foreach ($res as $val){
            if($val['username']==$name&&$val['password']==$pwd&&$code==$_SESSION['code']){
                session_start();
                $_SESSION['id']=$name;
                if($status){
                    setcookie('id', $_SESSION['id'], time()+24*60*60);
                    $_SESSION['id']=$_COOKIE['id'];
                }
                redirect(U('Index/index'));
                break;
            }else{
                echo "登录失败";
                redirect(U('Login/login_fail'));
                break;
            }
        }

    }

    public function out(){
        session_destroy();
        redirect(U('Index/index'));
    }
}