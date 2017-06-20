<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作战资讯</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        #banner{
            position: relative;
            width: 480px;
            height: 320px;
            margin: 0 auto;
            overflow: hidden;
            margin-top: 260px;
        }
        #slide-content{
         position: absolute;
            left:0;
            top:0;
         width: 1440px;
         height: 320px;
         overflow: hidden;
        }
        #slide-content li{
            width: 480px;
            height: 320px;
            list-style: none;
            float: left;
        }
        #slide-dots{
            position: absolute;
            width: 85px;
            height: 17px;
            top: 280px;
            left: 200px;
        }
        #slide-dots li{
            list-style: none;
            float: left;
            width: 15px;
            height: 15px;
            border:solid 1px #000000;
            margin-left: 10px;
            border-radius: 15px;
            background: rgba(255,255,255,0.5);

        }
        #slide-dots li[data-index="0"]{
            background: rgba(3,3,4,0.5);
        }
        #news{
            width: 960px;
            margin:0 auto;
            overflow: hidden;
            clear: both;
            background: rgba(3,3,4,0.25);
            margin-bottom: 100px;
        }
        #news_nav{
            overflow: hidden;
            clear: both;
            margin-left: 30px;
            margin-right: 30px;
            width: 95%;
            height: auto;
            border-bottom: 2px solid #4bb1cf;
        }
        #news_nav li{
            list-style: none;
            float: left;
            width: 100px;
            height: 60px;
            text-align: center;
            line-height: 60px;
            font-size: 24px;
        }
        #news_nav li a{
            display: block;
            text-decoration: none;
            color: #FFFFFF;
            width: 100%;
            height: 100%;
        }
        #news_main{
            overflow: hidden;
            clear: both;
            margin-left: 30px;
            margin-right: 30px;
            width: 95%;
            height: auto;
        }
        #news_main li{
            list-style: none;
            width: 100%;
            height: 160px;
        }
        #news_main li a{
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: #2C2C2C;
        }
        #news_main li a img{
            display: block;
            position: absolute;
            left:0;
            top:0;
            width: 280px;
            height: 150px;
        }
        #news_main li a h3{
            margin-top: 20px;
            display: block;
            width: auto;
            height: 40px;
            padding-left: 320px;
        }
        #news_main li a div{
            height: 40px;
            width: auto;
            padding-left: 320px;
        }
        #more{
            margin-left: 30px;
            margin-right: 30px;
            width: 95%;
            height: 80px;
            margin-top: 40px;
            position: relative;
            background: #002a80;
        }
        #get_more{
            position: absolute;
            width: 160px;
            height: 100%;
            margin-left: 50%;
            left: -80px;
            top:0;
            font-size: 24px;
            line-height: 80px;
            text-align: center;
        }
        #get_more a{
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            background: yellow;
        }

    </style>
    <script src="/TP/Public/Js/jquery-1.4.4.min.js"></script>
    <script>
        $(function () {
            var timer=setInterval(function () {
                if($("#slide-content").position().left>=-480){
                    $("#slide-content").animate({
                        'left':'-=480px'
                    })
                }else {
                    $("#slide-content").animate({
                        'left':'0'
                    })
                }

            },1000);

            $("#news_nav li a").mouseover(function () {
                $(this).css({
                    'color':'#4bb1cf'
                })
            });
            $("#news_nav li a").mouseleave(function () {
                $(this).css({
                    'color':'#ffffff'
                })
            });
            $("#news_nav li a").click(function () {
                $(this).css( {
                    'backgroundColor':'rgba(0,0,255,0.5)',
                    'color':'#4bblcf'
                })
            });
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
        <li><a href="<?php echo U('Pay/index');?>">圣痕系统</a></li>
        <li><a href="">故事背景</a></li>
        <li><a href="">游戏CG</a></li>
        <?php if(!isset($_SESSION['id'])): ?><div class="login"><a href="<?php echo U('Login/index');?>">登录</a></div>
            <?php else: ?>
            <div class="login"><a href="<?php echo U('Login/out');?>">欢迎<?php echo ($_SESSION['id']); ?>退出</a></div><?php endif; ?>
    </ul>
</div>
</body>
</html>
        <div id="banner">
            <ul id="slide-content">
                <li id="bg1"><img src="/TP/Public/Picture/bg1.png"></li>
                <li id="bg2"><img src="/TP/Public/Picture/bg2.png"></li>
                <li id="bg3"><img src="/TP/Public/Picture/bg3.png"></li>
            </ul>
            <ul id="slide-dots">
                <li data-index="0"></li>
                <li data-index="1"></li>
                <li data-index="2"></li>
            </ul>
        </div>
        <div id="news">
          <ul id="news_nav">
              <li><a href="<?php echo U('News/recently');?>">最新</a></li>
              <li><a href="<?php echo U('News/news');?>">新闻</a></li>
              <li><a href="<?php echo U('News/notice');?>">公告</a></li>
              <li><a href="<?php echo U('News/activity');?>">活动</a></li>
              <li><a href="<?php echo U('News/gongnue');?>">攻略</a></li>
          </ul>
            <ul id="news_main">
                <?php if(is_array($res)): foreach($res as $key=>$vo): ?><li>
                        <a href="">
                            <img src="<?php echo ($vo["pic"]); ?>">
                            <h3><?php echo ($vo["h3"]); ?></h3>
                            <div><?php echo ($vo["date"]); ?></div>
                            <div><?php echo ($vo["content"]); ?></div>
                        </a>
                    </li><?php endforeach; endif; ?>
            </ul>
            <div id="more">
                <div id="get_more"><a href="<?php echo U('News/getmore',array('dbname'=>$dbname));?>">更多新闻</a></div>
            </div>
        </div>
</body>
</html>