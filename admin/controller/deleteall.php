<?php
header("Content-type:text/html;charset=UTF-8");
include_once("../untils/conn.php");
if (count($_POST["chk"]) <= 0) {
    echo "<script>alert('请选择记录');history.go(-1);</script>";
} else {


    for ($i = 0; $i < count($_POST["chk"]); $i++) {
        //for语句循环读取复选框提交的值，
        $sql = "delete from list where id=" . $_POST["chk"][$i];

        mysqli_query($con, $sql);
    }

    echo "<script>alert('删除成功');location.href='../list.php';</script>";
}
