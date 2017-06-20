<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        #login{
            width:960px;
            margin: 0 auto;
            border:2px solid #46a546;
            background: url('/TP/Public/Picture/bp.jpg') no-repeat;
            background-size: auto auto;
            overflow: hidden;
            clear: both;
        }
        #login_left{
            float: left;
            width: 460px;
            height:600px;
            background: url('/TP/Public/Picture/kiana.png') no-repeat;
            background-size: auto auto;
        }
        #login_right{
            float: right;
            position: relative;
            width: 500px;
            height:600px;
        }
        #form{
            position: absolute;
            width: 400px;
            height:500px;
            top: 50px;
            left: 50px;
            border:1px solid #0e90d2;
        }
        #form form{
            margin-top: 50px;
        }
        #form div{
            width: 360px;
            height: 80px;
            margin: 10px 20px 10px 20px;

        }
        #form div label{
            display: block;
            width: 100%;
            height: 20px;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 40px;
            font-size: 18px;
            line-height: 18px;
        }
        #form div input{
            display: block;
            width: 80%;
            height: 25px;
            margin-left: 40px;
            margin-bottom: 35px;
            font-size: 18px;
        }
        #submit{
            position: relative;
        }
        #submit #submit_in{
            width: 240px;
            height: 40px;
            position: absolute;
            display: block;
            margin-top: 40px;
            margin-left: 180px;
            top: -20px;
            left: -120px;

        }
         #form #other{
             width: 100%;
             height: 60px;
             font-size: 18px;
        }
        #other #submit_rp{
            display: inline-block;
            margin:20px 0 20px 30px;
            width: 5px;
            height: 5px;

        }
        #other a{
            text-decoration: none;
            display: inline-block;
            margin-left: 40px;
            margin-right: 20px;
        }
        #code{
            position: relative;
        }
        #code #code_img{
            position: absolute;
            width: 150px;
            height: 60px;
        }
        #code #code_input{
            position: absolute;
            width: 100px;
            height: 40px;
            top: 10px;
            left: 200px;
            display: block;
            margin: 0;
            padding: 10px 30px;
        }
    </style>
    <script src="/TP/Public/Js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#code_ig").click(function () {
                this.src='/TP/ThinkPHP.php/Home/Login/getcode?d='+Math.random();
            });
        });

    </script>
</head>
<body>
<div id="login">
    <div id="login_left">

    </div>
    <div id="login_right">
        <div id="form">
            <form action="<?php echo U('Home/Login/do_login');?>" method="post">
                <div>
                    <label for="username">手机号或邮箱：</label>
                    <input type="text" id="username" name="username" placeholder="输入手机号/邮箱">
                </div>
                <div>
                    <label for="password">密码：</label>
                    <input type="password" id="password" name="password" placeholder="输入密码">
                </div>
                <div id="code">
                 <div id="code_img"><img src="<?php echo U('Login/getcode');?>" alt="二维码" id="code_ig"></div>
                    <input type="text" name="code" id="code_input">
                </div>
                <div id="submit">
                    <input type="submit" value="登录" id="submit_in">
                </div>
                <div id="other">
                    <input type="checkbox" value="1" name="rmpassword" id="submit_rp">记住密码
                    <a href="<?php echo U('Register/index');?>">注册</a>
                    <a href="">忘记密码</a>
                </div>
            </form>
        </div>

    </div>

</div>

</body>
</html>