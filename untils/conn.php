<?php
require_once('config.php');
$servername = $dbconfig['host']; //数据库服务器
$port = $dbconfig['port']; //数据库端口
$username =  $dbconfig['user']; //数据库用户名
$password = $dbconfig['pwd']; //数据库密码
$tab = $dbconfig['dbname']; //数据库名

// 创建连接
$con = new mysqli($servername, $username, $password, $tab);
$db = mysqli_select_db($con, $tab);
mysqli_query($con, "set names utf8");
// 检测连接
if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
}
