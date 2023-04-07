<?php
$id = $_POST["id"];
$yysa = $_POST['yys'];
$yysabbr = $_POST['yysabbr'];
$sortid = $_POST['sortid'];
include_once("../../untils/conn.php");
if ($con) {
  mysqli_query($con, "set names utf8");
  $data = $con->query("UPDATE sort  SET yys ='" . $yysa . "',yysabbr='" . $yysabbr . "',sortid='" . $sortid . "' where id=" . $id);
  if ($data > 0) {
    echo "<script>alert('修改信息成功');window.location.href='../sort.php'</script> ";
  } else {
    echo ("<script>alert('修改失败');window.location.replace(document.referrer)</script>");
  }
}
$con->close();
