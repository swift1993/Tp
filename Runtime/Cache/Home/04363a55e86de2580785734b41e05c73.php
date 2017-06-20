<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
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
            background: url('/TP/Public/Picture/register.jpg') no-repeat;
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
            border:1px solid #46a546;
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

    </style>
</head>
<body>
<div id="login">
    <div id="login_left">

    </div>
    <div id="login_right">
        <div id="form">
            <form action="<?php echo U('Home/Register/do_register');?>" method="post">
                <div>
                    <label for="username">手机号或邮箱：</label>
                    <input type="text" id="username" name="username" placeholder="输入手机号/邮箱">
                </div>
                <div>
                    <label for="password1">密码：</label>
                    <input type="password" id="password1" name="password" placeholder="输入密码">
                </div>
                <div>
                    <label for="password2">确认密码：</label>
                    <input type="password" id="password2" name="rpassword" placeholder="再次输入密码">
                </div>
                <div id="submit">
                    <input type="submit" value="注册" id="submit_in">
                </div>
            </form>
        </div>

    </div>

</div>

</body>
</html>