<?php
$name = $_POST['name'];
$jieshao = $_POST['jieshao'];
$yys = $_POST['yys'];
$ltime = $_POST['ltime'];
$zhutu = $_POST['zhutu'];
$link = $_POST['link'];
$xuhao = $_POST['xuhao'];
$xuanhao = $_POST['xuanhao'];
$baoyou = $_POST['baoyou'];
$gsd = $_POST['gsd'];

include_once("../../untils/conn.php");
if ($con) {
    mysqli_query($con, "set names utf8");
    $data = mysqli_query($con, "insert into list(name,jieshao,zhutu,ltime,yys,link,xuhao,xuanhao,baoyou,gsd) values('$name','$jieshao','$zhutu','$ltime','$yys','$link','$xuhao','$xuanhao','$baoyou','$gsd')");
    if ($data) {
        echo ("<script>alert('添加信息成功')</script>");
        echo ("<script>window.location.href='../list.php'</script>");
    } else {
        echo ("<script>alert('添加失败,请输入全部数据');history.back();</script>");
    }
}
