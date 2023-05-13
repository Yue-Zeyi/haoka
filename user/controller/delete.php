<?php
header("Content-type:text/html;charset=UTF-8");
include_once("../../untils/conn.php");

if (empty($_GET['id'])) {
    exit('<h1>连接数据库失败</h1>');
}
$id = $_GET['id'];
$query = mysqli_query($con, "delete from list where id = {$id}");
if (!$query) {

    echo ("<script>alert('删除失败');history.back();</script>");
} else {
    echo "<script>alert('删除信息成功');window.location.replace(document.referrer)</script> ";
}

?>

<?php

?>











