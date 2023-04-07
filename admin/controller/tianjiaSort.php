<?php
$yys = $_POST['yys'];
$yysabbr = $_POST['yysabbr'];
$sortid  = $_POST['sortid'];
include_once("../../untils/conn.php");
if ($con) {
  mysqli_query($con, "set names utf8");
  $data = mysqli_query($con, "insert into sort(yys,yysabbr,sortid) values('$yys','$yysabbr','$sortid')");
  if ($data) {
    echo ("<script>alert('添加信息成功')</script>");
    echo ("<script>window.location.href='sort.php'</script>");
  } else {
    echo ("<script>alert('添加失败,请输入全部数据');history.back();</script>");
  }
}
