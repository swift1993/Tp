<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册失败提示</title>
    <style type="text/css">
        div{
            width: 300px;
            height: 200px;
            margin:0 auto;
            font-size: 30px;
            color: red;
            line-height: 200px;
            //border:2px solid #953b39;

        }
        a{
            text-decoration: none;
            color: #46a546;
        }
    </style>
</head>
<body>
       <div>
           注册失败！<a href="<?php echo U('Register/index');?>">请重新注册</a>
       </div>
</body>
</html>