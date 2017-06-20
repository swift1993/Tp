<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册成功提示</title>
    <style type="text/css">
        div{
            width: 300px;
            height: 200px;
            margin:0 auto;
            font-size: 30px;
            color: #46a546;
            line-height: 200px;
            //border:2px solid #953b39;

        }
        a{
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
       <div>
           注册成功！<a href="<?php echo U('Login/index');?>">去登录</a>
       </div>
</body>
</html>