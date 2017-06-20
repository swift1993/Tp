<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2017/5/24
 * Time: 14:17
 */
//定义应用目录
define('APP_PATH','./App/');
//定义运行目录
define('RUNTIME_PATH','./Runtime/');

//define('BIND_MODULE','Home');

//开启调试模式
define('APP_DEBUG',true);

//加载框架入口文件
require "./ThinkPHP/ThinkPHP.php";