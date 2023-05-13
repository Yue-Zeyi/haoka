<?php
$usname = $_POST['username'];
$psword = $_POST['password'];
$uname  = $_POST['uname'];
$phone  = $_POST['phone'];
include_once("../../untils/conn.php");
if ($con) {
  mysqli_query($con, "set names utf8");
  $data = mysqli_query($con, "insert into user(username,password,name,phone) values('$usname','$psword','$uname','$phone')");
  if ($data) {
    echo ("<script>alert('添加信息成功')</script>");
    echo ("<script>window.location.href='../ulist.php'</script>");
  } else {
    echo ("<script>alert('添加失败,请输入全部数据');history.back();</script>");
  }
}
