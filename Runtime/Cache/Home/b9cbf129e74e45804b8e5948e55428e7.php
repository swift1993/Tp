<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo U('Home/Login/Index');?>" method="post">
    用户名：<input type="text" name="username">
    密码：<input type="password" name="userpwd">
    <input type="submit" value="登录">

</form>
</body>
</html>