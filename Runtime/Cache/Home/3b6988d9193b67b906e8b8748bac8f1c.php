<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>圣痕购买</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        ul{
            width: 964px;
            margin: 0 auto;
            margin-top: 150px;
        }
        #stig li{
            list-style: none;
            width: 960px;
            height: 300px;
            border:2px solid #000000;
            margin-bottom: 2px;
            
        }
        #stig li div{
            float: left;
        }
        .img{
            height: 100%;
            width: 328px;
            border-right: 2px solid #a9dba9;

        }
        .img img{
            margin: 75px 63px;
        }
        .desc{
            height: 100%;
            width: 300px;
        }
        .desc div{
            height: 149px;
            width: 100%;
            border-bottom: 1px solid #000088;
        }
        .num{
            height: 100%;
            width: 328px;
            border-left: 2px solid #000088;
            position: relative;
        }
        .do_num{
            position: absolute;
            top:120px;
            left: 90px;
            border: 1px solid #000000;
        }
        .do_num div{
            float: left;
            width: 48px;
            height: 48px;
            text-align: center;
            line-height: 48px;
            font-size: 24px;
            border:1px solid #000000;
            cursor: pointer;
        }
        .do_num input{
            float: left;
            display: inline-block;
            width: 48px;
            height: 48px;
            text-align: center;
            line-height: 48px;
            font-size: 24px;
        }
        #addcar{
            margin: 0 auto;
            width: 200px;
            height: 100px;
            font-size: 30px;
            text-align: center;
            line-height: 100px;
            margin-top: 30px;
            background: #0e90d2;
            cursor: pointer;
        }
    </style>
    <script src="/TP/Public/Js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".do_num div").click(function () {
                $.ajax({
                    url:'/TP/ThinkPHP.php/Home/Pay/jj',
                    type:'post',
                    data:{'status':$(this).data('index'),'num':($(this).data('index')?$(this).prev().val():$(this).next().val())},
                    dataType:'json',
                    error:function (data) {
                        alert('异常');
                    },
                    success:function (data) {
                        if(data.status==0){
                            $(this).next().val(data.num);
                        }else{
                            $(this).prev().val(data.num);
                        }

                    }.bind(this)
                });
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
     <ul id="stig">
         <?php if(is_array($res)): foreach($res as $key=>$vo): ?><li>
             <div class="img"><img src="<?php echo ($vo["url"]); ?>"></div>
             <div class="desc">
                 <div><?php echo ($vo["price"]); ?></div>
                 <div><?php echo ($vo["des"]); ?></div>
             </div>
             <div class="num">
                 <div class="do_num">
                     <div data-index="0">-</div>
                     <input type="text">
                     <div data-index="1" >+</div>
                 </div>

             </div>
         </li><?php endforeach; endif; ?>
     </ul>
<div id="addcar">加入购物车</div>
</body>
</html>