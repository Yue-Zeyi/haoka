<?php
header("Content-type:text/html;charset=UTF-8");
include_once("../../untils/conn.php");
$id = $_GET['id'];
echo $id;
$sql = "select status from list where id=$id";
$data = mysqli_query($con, $sql);
$rows = mysqli_fetch_row($data);
$type = $rows[0];
echo $type;
if ($type == 1) { //关闭  
  $data = $con->query("UPDATE list SET status=0 where id=$id");
} else { //开启  
  $data = $con->query("UPDATE list SET status=1 where id=$id");
}
