<?php
$id = $_POST["id"];
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
    $data = $con->query("UPDATE list  SET name ='" . $name . "',jieshao='" . $jieshao . "',yys='" . $yys . "',ltime='" . $ltime . "',zhutu='" . $zhutu . "' ,link='" . $link . "',xuhao='" . $xuhao . "',xuanhao='" . $xuanhao . "',baoyou='" . $baoyou . "',gsd='" . $gsd . "'where id=" . $id);
    if ($data > 0) {
        echo "<script>alert('修改信息成功');window.location.href='../list.php'</script> ";
    } else {
        echo ("<script>alert('修改失败');window.location.replace(document.referrer)</script>");
    }
}
$con->close();
