<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .main{
            width: 100%;
            margin:0 auto;
            min-width: 1024px;
        }

    .top{
        background: url('/TP/Public/Picture/timg.jpg') no-repeat;
        background-size: auto 800px;
        width: 1760px;
        height: 800px;
        margin: 0 auto;
        position:relative;
    }

        .qyn{
            position: absolute;
            top: 30px;
            left: 20px;
        }
        .bh3{
            position: absolute;
            top: 60px;
            left: 1100px;
        }
        .ai{
            position: absolute;
            top:550px;
            left: 1500px;
        }
        .tip{
            position: absolute;
            top: 300px;
            left: 400px;
        }
        .ai a{
            text-decoration: none;
        }
        .down{
            width: 960px;
            margin: 0 auto;
            margin-top: 40px;
            overflow:hidden;
            clear:both
        }
        #acter_list{
            width: 960px;
            height: auto;
            margin:0 auto;
        }
        #acter_list li{
            list-style: none;
            float: left;
            width: 25%;
            height: 160px;
            margin-bottom: 30px;
        }
        #acter_list li a{
            text-decoration: none;
            width: 85%;
            display: block;
            text-align: center;
            border: 2px solid #4bb1cf;
            background: rgba(23,203,255,0.5);
            height: 156px;
            border-radius: 30px;
        }
    </style>
    <script type="text/javascript" src="/TP/Public/Js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#ai").mouseover(function () {
                this.style.width=200+"px";
                this.style.height=190+"px";
            });
            $("#ai").mouseleave(function () {
                this.style.width=180+"px";
                this.style.height=170+"px";
            });
            $("#acter_list li a").mouseover(function () {
                this.style.width=200+"px";
                this.style.height=170+"px";
                $(this).css("backgroundColor", "rgba(255,255,0,0.5)");
            })
            $("#acter_list li a").mouseleave(function () {
                this.style.width=180+"px";
                this.style.height=155+"px";
                $(this).css("backgroundColor", "rgba(23,203,255,0.5)");
            })
        });
    </script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        .nav{
            position: fixed;
            top:20px;
            left:0;
            width: 100%;
            min-width:1024px;
            z-index:1000;
            font-size:18px;
        }
        #nav_list{
            position:relative;
            width:960px;
            margin:0 auto;
            text-align:center;
            white-space:nowrap;
        }
        #nav_list li{
            list-style: none;
            display: inline-block;
            width:12.5%;
            height:50px;
        }
        #nav_list li a{
            text-decoration: none;
            width: 95%;
            display: block;
            text-align: center;
            border: 2px solid #4bb1cf;
            background: rgba(255,255,255,1);
            border-radius:10px;
            height:50px;
            line-height: 50px;
            color: red;
            transform: skew(-10deg);


        }
        .login{
            margin:0 auto;
            width: 200px;
            height:160px;
            display: inline-block;
        }
        .login a{
            text-decoration: none;
            width: 95%;
            display: block;
            text-align: center;
            border: 2px solid #4bb1cf;
            background: rgba(255,255,255,1);
            border-radius:10px;
            height:50px;
            line-height: 50px;
            color: red;
            margin-top: 20px;
            transform: skew(-10deg);
        }
    </style>
    <script type="text/javascript" src="/TP/Public/Js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(" #nav_list li a").mouseover(function () {
                this.style.background="skyblue";
                this.style.color="black";
            });

            $("#nav_list li a").mouseleave(function () {
                this.style.background="white";
                this.style.color="red";
            });

            $(".login a").mouseover(function () {
                $(this).css("backgroundColor","rgba(0,255,0,0.8)");
                $(this).css("color","rgba(0,0,255,1)");
            });
            $(".login a").mouseleave(function () {
                $(this).css("backgroundColor","rgba(255,255,255,1)");
                $(this).css("color","rgba(255,0,0,1)");
            });

        });
    </script>
</head>
<body>
<div class="nav">
    <ul id="nav_list">
        <li><a href="">首页</a></li>
        <li><a href="<?php echo U('News/index');?>">作战资讯</a></li>
        <li><a href="">游戏视频</a></li>
        <li><a href="">角色介绍</a></li>
        <li><a href="">游戏特色</a></li>
        <li><a href="">圣痕系统</a></li>
        <li><a href="">故事背景</a></li>
        <li><a href="">游戏CG</a></li>
        <?php if(!isset($_SESSION['id'])): ?><div class="login"><a href="<?php echo U('Login/index');?>">登录</a></div>
            <?php else: ?>
            <div class="login"><a href="<?php echo U('Login/out');?>">欢迎<?php echo ($_SESSION['id']); ?>退出</a></div><?php endif; ?>
    </ul>
</div>
</body>
</html>
<div class="main">

    <div class="top">
        <div class="qyn">
            <img src="/TP/Public/Picture/kiana.png" alt="琪亚娜">
        </div>
        <div class="tip">
            <img src="/TP/Public/Picture/bh3_slogan.png" alt="宣传标语">
        </div>
        <div class="bh3">
            <img src="/TP/Public/Picture/bh3logo.png" alt="崩坏3logo">
        </div>
        <div class="ai">
            <a href=""><img id=ai src="/TP/Public/Picture/social_btn.png" alt="爱酱"></a>
        </div>
    </div>
    <div class="down">
            <ul id="acter_list">
                <?php if(is_array($result)): foreach($result as $key=>$vo): ?><li><a href=""><img src="<?php echo ($vo["picture"]); ?>"></a></li><?php endforeach; endif; ?>
            </ul>
    </div>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bottom</title>
    <style type="text/css">
        *{
            margin:0;
            padding: 0;
        }
        .bottom{
            width: 1020px;
            margin:0 auto;
        }
        .bottom_list{
            width: 1020px;
            margin-top: 50px;
            margin-bottom: 100px;
        }
        .bottom_list li{
            list-style: none;
            display: inline-block;
            width: 19%;
            height: 150px;
        }
        .bottom_list li a{
            display: block;
            width:100%;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="bottom">
    <ul class="bottom_list">
        <li><a href=""><img src="/TP/Public/Picture/lb_1_1.png" ></a></li>
        <li><a href="https://tieba.baidu.com/f?kw=%E5%B4%A9%E5%9D%8F3rd&fr=index"><img src="/TP/Public/Picture/lb_2_1.png" ></a></li>
        <li><a href=""><img src="/TP/Public/Picture/lb_3_1.png" ></a></li>
        <li><a href=""><img src="/TP/Public/Picture/lb_4_1.png" ></a></li>
        <li><a href=""><img src="/TP/Public/Picture/lb_5_1.png" ></a></li>
    </ul>
</div>
</body>
</html>
</body>
</html>